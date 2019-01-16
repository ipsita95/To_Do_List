<?php
session_start();


$db = mysqli_connect('localhost','root','','task_db') or die ('Database not connected');

// Check if session is properly set or not
if (isset($_SESSION['email'], $_SESSION['password'])) {
  $email = $_SESSION['email'];
  $password = $_SESSION['password'];
  // Check if session data combi exists in db
  $result =  mysqli_query($db,"SELECT * FROM `users` WHERE email = '$email' AND password = '$password'");
  if (mysqli_num_rows($result) == 0) {
    // Combi does not exist
    session_destroy();
    header("Location: login.php");
  } else {
    // Get user id
    $user = mysqli_fetch_array($result);
    // $user_id = $user[]
    $user_id = $user['user_id'];
  }

} else {
  // session does not exist
  session_destroy();
  header("Location: login.php");
}

// Create post
if(isset($_POST['submit']))
{
  $task = $_POST['task'];
  mysqli_query($db,"INSERT INTO `tasks` (user_id, task_content) VALUES ('$user_id', '$task')");
}
// Render tasks for current user
$task_table = mysqli_query($db, "SELECT * FROM `tasks` WHERE user_id='$user_id'");
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
 <link href="https://fonts.googleapis.com/css?family=Coiny" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/styles/style.css" rel="stylesheet">
  </head>
  <body class="read">
    <div class="container">
      <div class="row mt-5">
        <div class="col-lg-10 col-md-10 col-sm-10">
          <h3>TO-DO-LIST</h3>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2"><a href="logout.php"  id="logout">Logout</a></div>
      </div>
    </div>
    <form action="welcome.php" method="post">
    <div class="contianer">
      <div class="row justify-content-center">
        <div class="card list-wrapper">
          <div class="card-header">
            <div class="row">
              <div class="col-lg-11 col-md-9 col-sm-9">
                <div class="form-group">
              <input type="text" class="form-control task_input" placeholder="Enter your list" name="task"></div>
              </div>
              <div class="col-lg-1 col-md-3 col-sm-3"><button class="task_btn" type="submit" name="submit"><i class="fas fa-plus-circle"></i></button></div>
            </div>
          </div>
          <div class="card-body list">
            <div class="row">
              <div class="col-lg-11 col-md-9 col-sm-9">
               <table>
                <tbody>
                  <?php if ($task_table != false) {
                      while( $row = mysqli_fetch_array($task_table) ) {
                   ?>
                 <tr>
                   <td  class="task" ><?php echo $row['task_content']; ?>
                   </td>
                   <td>
                    <div class="delete">
                      <a href="deletepost.php?value=<?php echo $row['task_id']; ?>"><i class="far fa-trash-alt"></i></a>
                    </div>
                   </td>
                 </tr>
                 <?php }
                 } ?>
                 </tbody>
               </table>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
  </form>
   <script
      src="https://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous"></script>
    <script src="assets/js/vendors/bootstrap/popper.min.js"></script>
    <script src="assets/js/vendors/bootstrap/bootstrap.min.js"></script>
    <script src="assets/js/vendors/bootstrap/holder.min.js"></script>
  </body>
</html>