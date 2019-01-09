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
    <title>Admin delete user</title>
    <link rel="stylesheet" type="text/css" href="../css/deluser.css">
</head>
    
<body>
       <div class="form">
        <form method="post">  
            <p>Search Name</p>
            <input type="text" name="searchName" placeholder="Enter name">
            <input type="submit" name="submit" value="Search name" class="button">            
        </form>  
        </div> 
        
    <?php
    $dbsevername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "web";

    $conn = mysqli_connect("localhost", "root", "","web");
    
  /*  if (!$conn) {
        echo "No Connection";
    }
    else {
        echo "Connected";
    }*/

    if(isset($_POST['submit'])){
        
        $name = $_POST['searchName'];

        $seluser = "SELECT * FROM users WHERE  name ='$name' ";

        $query = mysqli_query($conn,$seluser);

        echo "<table border=1 class=\"user\">
            <tr>
                <th>User Id</th>
                <th>User type</th>
                <th>User name</th>
                <th>Email</th>
                <th>Delete records</th>

            </tr>";
        if (mysqli_num_rows($query) > 0){
            while($row = mysqli_fetch_assoc($query)){
                echo "<tr>
                        <td>".$row['id']."</td>
                        <td>".$row['type']."</td>
                        <td>".$row['name']."</td>
                        <td>".$row['email']."</td>
                        <td>
                            <form action =\"admindeluser.php\" name=\"del_submit\" method=\"post\" >
                                <input type=\"hidden\" value=" .$row['id']. " name=\"delid\">
                                <input class=\"button\" type=\"submit\" name=\"submit\" value=\"Delete\">
                            </form>
                        </td>
                    </tr>";

            }
        }       
      }       
                                
  
?>
    
    
</body>
   
    
</html>