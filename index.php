<?php
session_start();
//connect to database
$db = mysqli_connect('localhost','root','','task_db') or die ('Database not connected');
//get the value from login.php
$email = $_POST['email'];
$password = $_POST['password'];
//to prevent mysql injection
$email = stripcslashes('email');
$password = stripcslashes('password');
$email = mysqli_real_escape_string($db,$_POST['email']);
$password = mysqli_real_escape_string($db,$_POST['password']);
//query
$query = "SELECT * FROM `users` WHERE email = '$email' AND password = '$password'";
$result = mysqli_query($db, $query);

$num = mysqli_num_rows($result);

if($num == 1){
	
	$_SESSION['email'] = $email;
	$_SESSION['password'] = $password;
	header('location:welcome.php');


}else{

	header('location:login.php?error=invalidCred');
}