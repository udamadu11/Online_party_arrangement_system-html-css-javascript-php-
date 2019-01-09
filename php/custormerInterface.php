<?php include('include/connection.php') ?>
<?php include('include/session.php') ?>

<?php
	//Unauthorized Access Check
    checkSession();
    if(!isset($_SESSION['type']) || $_SESSION['type'] != '0'){
       $message = base64_encode(urlencode("Please Login"));
       header('Location:login.php?msg=' . $message);
       exit();
       }
?>


<!DOCTYPE html>
<html>
<head>
	<title>Custormer interface</title>
	<link rel="stylesheet" type="text/css" href="../css/cusinterface.css">
</head>
<body>
	<?php include('include/header.php') ?>
	<table>
		<tr>
			<td>

	<div>
		
		</div>



	</div>
			<iframe 
	src="addvenue.php"
	name="frame"
	width="1375"
	height="1000" 
	>
		
	</iframe>
			</td>
		</tr>
	</table>
</body>
</html>