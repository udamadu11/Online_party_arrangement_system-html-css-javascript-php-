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
	<title>Users</title>
	<link rel="stylesheet" type="text/css" href="../css/feedback.css">
</head>
<body>
<table>
	<tr>
		<th>ID</th>
		<th>NAME</th>
		<th>EMAIL</th>
		<th>FEEDBACK</th>
	</tr>
<?php
	$conn = mysqli_connect("localhost","root","","web");
	if ($conn-> connect_error){
		die("Connection failed:". $conn-> connect_error);
	}

	$sql ="SELECT fid, f_name, f_email, feedback FROM feedb";
	$result = $conn-> query($sql);

		if ($result-> num_rows > 0) {
			while ($row = $result-> fetch_assoc()){
				echo "<tr><td>". $row["fid"]."</td><td>". $row["f_name"]. "</td><td>".$row["f_email"]. "</td><td>". $row["feedback"]. "</td></tr>";
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