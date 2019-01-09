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
<?php
	$dbsevername = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbName = "web";

	$conn = mysqli_connect("localhost", "root", "","web");
	
	if (!$conn) {
		echo "No Connection";
	}
	else {
		echo "Connected";
	}
?>
<?php

$newId = $_POST['editId'];
$newName = $_POST['editName'];
$newEmail = $_POST['editEmail'];
$newPassword = sha1($_POST['editPassword']);
	
	$Query= "UPDATE users SET name = '$newName', email = '$newEmail', password = '$newPassword' WHERE id = '$newId' ";

if (mysqli_query($conn,$Query) === TRUE) {
               echo "successful";
				exit();
            } 
            
            else {
               echo "error";
				exit();
            }
    



mysqli_close($connection);

?>