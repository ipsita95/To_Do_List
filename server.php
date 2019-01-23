<?php
session_start();

$name="";
$email="";

$db = mysqli_connect('localhost','root','','task_db') or die ('Database not connected');
  
  $name = mysqli_real_escape_string($db,$_POST['name']);
  $email = mysqli_real_escape_string($db,$_POST['email']);
  $password = mysqli_real_escape_string($db,$_POST['password']);
  //check if the email alreay exits
    $sql_e = "SELECT * FROM users WHERE email='$email'";
    $res_e = mysqli_query($db, $sql_e);

    if (mysqli_num_rows($res_e) >= 1) {
      $email_error = "email already exists";
      header("Location: registration.php");  
    }else{
$query = "INSERT INTO users (name,email,password) VALUES ('$name','$email','$password')";
mysqli_query($db, $query) or die('Error querying database.'); 
}
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
   <!--font-->
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/styles/style.css" rel="stylesheet">
  </head>
  <body class="smiley">
    <div class="container server">
      <div class="row justify-content-center">
    Hi, <?php echo $_POST["name"]; ?>
    <br>
    <a href="login.php">Login </a>to get started.
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