<?php

print_r($_GET);
$db = mysqli_connect('localhost','root','','task_db') or die ('Database not connected');
if(isset($_GET['value']))
{
  $task = $_GET['value'];
  mysqli_query($db,"DELETE FROM `task_table` WHERE task='$task'");
}
// DELETE FROM `task_table` WHERE task='$task'
header('Location: welcome.php');
?>