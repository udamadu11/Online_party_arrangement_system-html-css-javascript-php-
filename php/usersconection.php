<?php

	
	$name ="";	
	$email ="";	
	$password ="";
	$id = 0;	 
	$edit_state =false;

	//conect database
	$db = mysqli_connect("localhost","root","","web");

	//if submit button is clicked
	if (isset($_POST['submit'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		$sql ="INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
		mysqli_query($db, $sql);
	}

	//update
	if (isset($_POST['update'])) {
		$name = mysqli_real_escape_string($_POST['name']);
		$email = mysqli_real_escape_string($_POST['email']);
		$password = mysqli_real_escape_string($_POST['password']);
		$id = mysqli_real_escape_string($_POST['id']);

		mysqli_query($db, "UPDATE users SET name='$name', email='$email', password='password', id=$id");
	}
	 //delete
	if (isset($_GET['del'])) {
		$id = $_GET['del'];
		mysqli_query($db, "DELETE FROM users WHERE id=$id");
	}

	$result = mysqli_query($db, "SELECT * FROM users");
?>