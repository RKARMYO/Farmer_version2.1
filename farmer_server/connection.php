<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db_name = "localstorage";
	$conn = new mysqli($servername, $username, $password, $db_name);
	$conn->set_charset("utf8");
	if($conn->connect_error){
		echo "error in connection ". $conn->connect_error;
	}
	else {
		//echo "\n Database Connected ";
	}
?>