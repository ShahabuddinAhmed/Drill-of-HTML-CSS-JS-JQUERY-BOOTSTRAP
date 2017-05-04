<?php
	$server = "localhost";
	$user = "root";
	$paass = "";
	$db ="sample";
	$conn = new mysqli($server, $user, $paass, $db);
	if ($conn->connect_error)
	{
	  	echo "Failed to connect with database: " . $conn->connect_error;
	}
?>