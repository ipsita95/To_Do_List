<?php
session_start();

$db = mysqli_connect('localhost','root','','task_db') or die ('Database not connected');
if(isset($_POST['submit']))
{
  $task = $_POST['task'];
  mysqli_query($db,"INSERT INTO task_table (task) VALUES ('$task')");
}
$task_table = mysqli_query($db, "SELECT * FROM task_table");
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
    <form action="welcome.php" method="post">
      <input type="text" class="task_input" name="task">
      <button class="task_btn" type="submit" name="submit">Add</button>
    </form>
    <table>
      <tbody>
        <?php while( $row = mysqli_fetch_array($task_table) ) { ?>
        <tr>
          <td class="task" ><?php echo $row['task']; ?>
            <a href="deletepost.php?value=<?php echo $row['task']; ?>">Delete</a>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
   <script
      src="https://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous"></script>
    <script src="assets/js/vendors/bootstrap/popper.min.js"></script>
    <script src="assets/js/vendors/bootstrap/bootstrap.min.js"></script>
    <script src="assets/js/vendors/bootstrap/holder.min.js"></script>
  </body>
</html>