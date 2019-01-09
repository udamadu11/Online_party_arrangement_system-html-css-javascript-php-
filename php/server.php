<?php
	$dbsevername = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbName = "web";

	$conn = mysqli_connect("localhost", "root", "","web");
	if ($conn->connect_error){
		die("connection Fail". $conn->connect_error);
	}

?>