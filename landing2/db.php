<?php

function dbConnect() {
	
	$dbname = "codingacademy";

// LOCAL:
//  $servername = "localhost";
// 	$username = "root";
// 	$password = "";

// // PROD:
	$servername = "166.62.8.50";
	$username = "codingacademy";
	$password = "misterBIT2016!";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		//die("Connection failed: " . $conn->connect_error);
		die("Ein Hibur");
	} 
	return $conn;
	
}

?>

