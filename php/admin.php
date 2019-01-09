<?php include('include/session.php') ?>

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
	<title>Admin Page</title>
	<link rel="stylesheet" type="text/css" href="../css/admin.css">
</head>
<body>
	<?php include('include/header.php') ?>
	<table>
		<tr>
			<td>
	<div class="top">
		<h2>WELCOME TO ADMIN PAGE</h2>
	</div><!--top-->
	<div class="nav">
		<ul>
			<li><a href="booking.php" target="frame">Booking History</a></li>
			<li><a href="user.php" target="frame">Users</a></li>
			<li><a href="seefeedback.php" target="frame">Feedback</a></li>
		</ul>
	</div>
	
	<iframe 
	src="booking.php"
	name="frame"
	width="1350"
	height="1000" 
	>
		
	</iframe>
	</td>
	</tr>
	</table>
</body>
</html>