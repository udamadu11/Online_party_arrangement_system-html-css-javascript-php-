<?php
	$dbsevername = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbName = "web";

	$conn = mysqli_connect("localhost", "root", "","web");
	
	if (!$conn) {
		echo "No Connection";
	}
	else {
		echo "Connected";
	}
?>