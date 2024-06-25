<!doctype html>
<html>
<form method="post">
	<input type="text" name="username" placeholder="username"> 
	<input type="text" name="password" placeholder="password">
	<input type="submit" value="submit" name="submit">
</form>



<?php
include("../database.php");


if(isset($_POST['submit']))
{
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	$name = mysqli_real_escape_string($conn, $_POST['username']);
	$pass = password_hash($password, PASSWORD_DEFAULT);
	$insert = mysqli_query($conn, "INSERT INTO admin(username, pwd) VALUES('$name', '$pass')");
}

?>