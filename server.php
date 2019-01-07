<?php
session_start();

$name="";
$email="";

$db = mysqli_connect('localhost','root','','register') or die ('Database not connected');
  
  $name = mysqli_real_escape_string($db,$_POST['name']);
  $email = mysqli_real_escape_string($db,$_POST['email']);
  $password = mysqli_real_escape_string($db,$_POST['password']);

$query = "INSERT INTO todo (Name,Email,Password) VALUES ('$name','$email','$password')";
mysqli_query($db, $query) or die('Error querying database.'); 
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
<!--    <link rel="icon" href="../../../../favicon.ico">-->

    <title>To-Do-List</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/styles/vendors/bootstrap/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="assets/styles/style.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <div class="row">
    Hi, <?php echo $_POST["name"]; ?>
    <a href="login.php">Login</a> to get started.
    </div>
    </div>
      
     <script
      src="https://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous"></script>
    <script src="assets/js/vendors/bootstrap/popper.min.js"></script>
    <script src="assets/js/vendors/bootstrap/bootstrap.min.js"></script>
    <script src="assets/js/vendors/bootstrap/holder.min.js"></script>
  </body>
</html>