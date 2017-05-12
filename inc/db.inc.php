<?php 
	$host = "localhost";
	$user = "root";
	$pass = "";
	$database = "site";

	// Create connection
	$db = new mysqli($host, $user, $pass, $database);

	// Check connection
	if($db->connect_error) {
		die("MySQL connection failed: " . $db->connect_error);
	}
?>