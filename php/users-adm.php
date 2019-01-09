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
	<title>Users-adm</title>
	<link rel="stylesheet" type="text/css" href="../css/Users-adm.css">
</head>
<body>
<table>
	<tr>
		<th>ID</th>
		<th>NAME</th>
		<th>EMAIL</th>
		<th>TYPE</th>
	</tr>
<?php
	$conn = mysqli_connect("localhost","root","","web");
	if ($conn-> connect_error){
		die("Connection failed:". $conn-> connect_error);
	}

	$sql ="SELECT id, name, email, type FROM users";
	$result = $conn-> query($sql);

		if ($result-> num_rows > 0) {
			while ($row = $result-> fetch_assoc()){
				echo "<tr><td>". $row["id"]."</td><td>". $row["name"]. "</td><td>".$row["email"]. "</td><td>". $row["type"]. "</td></tr>";
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