<?php include('include/connection.php'); ?>
<?php
if(isset($_POST['submit']))
		
	{

		$type =$_POST['type'];
		$place =$_POST['place'];
		$guest =$_POST['guest'];
		$equipment =$_POST['equipment'];
		$food =$_POST['food'];
		$preferences =$_POST['preferences'];
		$price =$_POST['price'];


				$sql = "INSERT INTO service (type,place,guest,equipment,food,preferences,price) VALUES ('$type','$place','$guest','$equipment','$food','$preferences','$price')";
				mysqli_query($conn, $sql);//passing sql	

}
?>



<!DOCTYPE html>
<html>
<head>
	<title>Add venue</title>
	<link rel="stylesheet" type="text/css" href="../css/addvenue.css">
</head>
<body>

	<form action="addvenue.php" method="post">
		<img src="../img/new-product.png">
						<table>
						<tr>
							<td>Event type:</td>
							<td><input type="text" id="type" name="type" placeholder="type"></td>
						</tr>
						<tr>
							<td>Event place:</td>
							<td><input type="text" id="place" name="place" placeholder="place"></td>
						</tr>

						<tr>
							<td>No of Guest:</td>
							<td><input type="text" id="guest" name="guest" placeholder="guest"></td>
						</tr>

						<tr>
							<td>Equipment:</td>
							<td><input type="text" id="equipment" name="equipment" placeholder="equipment"></td>
						</tr>

						<tr>
							<td>Food:</td>
							<td><input type="text" id="food" name="food" placeholder="food"></td>
						</tr>

						<tr>
							<td>Preferences:</td>
							<td><input type="text" id="preferences" name="preferences" placeholder="preferences"></td>
						</tr>

						<tr>
							<td>Price:</td>
							<td><input type="text" id="price" name="price" placeholder="price"></td>
						</tr>

						
						<tr>
							<td></td>
							<td>
								<input type="submit" name="submit" value="SUBMIT">
								<input type="reset" name="reset" value="RESET">
							</td>
						</tr>
						</table>
					</form>
</body>
</html>
