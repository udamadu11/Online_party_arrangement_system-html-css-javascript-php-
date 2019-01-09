<?php require_once('include/connection.php'); ?>

<?php
session_start();

if (isset($_SESSION['name'])){
		session_unset($_SESSION['name']);
        session_unset($_SESSION['type']);
        session_unset($_SESSION['id']);
		$message = base64_encode(urlencode(("Logged Out Successfully")));
		header('Location:login.php?msg=' . $message);
		exit();
	}

?>