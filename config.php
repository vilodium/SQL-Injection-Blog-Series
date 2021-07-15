<?php 
	session_start();

	$conn = mysqli_connect("localhost", "root", "root", "sql1");

	if (!$conn) {
		die("Error connecting to database: " . mysqli_connect_error());
	}
?>