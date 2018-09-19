<?php
	$servername = "localhost";
	$username = "guest";
	$pass = "123";
	$db ="taskandrius";
	
	// Create connection
	$conn = new mysqli($servername, $username, $pass, $db);
	
	// Check connection
	if ($conn->connect_error){
		die("Connection failed: " . $conn->connect_error);
	}
	if($_SESSION['start'] != 1){
	session_start();
	$_SESSION['start'] = 1;
	}
?>