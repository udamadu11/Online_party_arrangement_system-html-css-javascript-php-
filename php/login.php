<?php include('include/connection.php') ?>
<?php include('include/session.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="../css/login.css">
	
</head>
<body>
	<div class="login">
		<img src="../img/man.png" alt="user">
	<form action="logincom.php" method="post">
		<center><table>
			<tr>
				<td>NAME:</td>
				<td><input type="text" name="name" id="name" placeholder="Enter the user name"></td>
			</tr>
			<tr>
				<td>PASSWORD:</td>
				<td><input type="password" name="password" id="password" placeholder="Enter the password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="LOGIN" onclick="loginform();"></td>
			</tr>
				<td></td>
				<td><a href="#">Forgot password</a></td>
			
		</table></center>
		<p>Or</p>
		<center><a href="reg.php">SIGN UP </a></center>
	</form>
	</div>
</body>
</html>