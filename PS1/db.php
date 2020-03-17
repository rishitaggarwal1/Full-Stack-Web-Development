<?php
	/*
		database variables
	*/
	$server_name="localhost";
	$user_name="root";
	$password="";
	$database_name="ps1";
	/*
		Database connectivity
	*/
	$conn=mysqli_connect($server_name, $user_name, $password) or die("Server not connected");
	mysqli_select_db($conn,"$database_name");
?>