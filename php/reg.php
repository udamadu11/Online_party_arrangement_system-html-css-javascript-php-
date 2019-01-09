<?php include('include/connection.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registraton form</title>
	<script src="../javascript/registration.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/registration.css">
</head>
<body>
	<div class="registration">
		<img src="../img/man2.png">
		<form action="registration.php" method="post">
			<table align="center">
				<tr>
					<td>NAME:</td>
					<td><input type="text" name="name" id="name" placeholder=" Enter User Name"></td>
				</tr>
				<tr>
					<td>E-MAIL:</td>
					<td><input type="email" name="email" id="email" placeholder="Enter the email"></td>
				</tr>
				<tr>
					<td>PASSWORD:</td>
					<td><input type="password" name="password" id="password" placeholder="Enter the password"></td>
				</tr>

				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="submit" onclick="registrationform();">
					<input type="reset" name="RESET"></td>
				</tr>
				<tr>
					<td><input type="hidden" name="type" value="0"></td>
				</tr>
			</table>
			
		</form>
		<h3>OR</h3>
		<center><a href="login.php">Already You have an Account ?</a></center>
	</div><!--registration-->

	 ?>

</body>
</html>