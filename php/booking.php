<?php include('include/connection.php') ?>
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
	<title>Booking</title>
	<link rel="stylesheet" type="text/css" href="../css/booking.css">
</head>
<body>
<table>
	<tr>
		<th>ID</th>
		<th>TYPE</th>
		<th>PLACE</th>
		<th>GUEST</th>
		<th>EQUIPMENT</th>
		<th>FOOD</th>
		<th>PREFERENCES</th>
		<th>PRICE</th>
	</tr>
<?php
	$conn = mysqli_connect("localhost","root","","web");
	if ($conn-> connect_error){
		die("Connection failed:". $conn-> connect_error);
	}

	$sql ="SELECT ser_id,type,place,guest,equipment,food,preferences,price FROM service";
	$result = $conn-> query($sql);

		if ($result-> num_rows > 0) {
			while ($row = $result-> fetch_assoc()){
				echo "<tr><td>". $row["ser_id"]."</td><td>". $row["type"]. "</td><td>".$row["place"]. "</td><td>". $row["guest"]. "</td><td>" .$row["equipment"]. "</td><td>" .$row["food"]. "</td><td>" .$row["preferences"]. "</td><td>" .$row["price"]. "</td></tr>";
			}
			echo "</table>";
		}
		else{
			echo "0 result";
		}
		$conn-> close();

?>
	</table>
</body>
</html>