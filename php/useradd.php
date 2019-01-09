<?php include('include/session.php'); ?>
<?php
    //Unauthorized Access Check
    checkSession();
    if(!isset($_SESSION['type']) || $_SESSION['type'] != '1'){
       $message = base64_encode(urlencode("Please Login"));
       header('Location:login.php?msg=' . $message);
       exit();
       }

?>

<!DOCTYPE html>
<html>
<head>
	<title>User Add</title>
	<link rel="stylesheet" type="text/css" href="../css/useradd.css">
</head>
<body>
	<div class="form">
		<form action="adminuseradd.php" method="post">	
		<table align="center">
				<tr>
					<td>NAME:</td>
					<td><input type="text" id="name" placeholder=" Enter User Name" name="name"></td>
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
		</table>
		</form>
	</div>
</body>
</html>