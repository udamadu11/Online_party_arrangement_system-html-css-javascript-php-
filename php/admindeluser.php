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

    $id = $_POST['delid'];

    $deleteQuery= "DELETE FROM users WHERE id = '$id' ";

    $deleteResult = mysqli_query ($conn, $deleteQuery);
    


mysqli_close($conn);
    
    
?>