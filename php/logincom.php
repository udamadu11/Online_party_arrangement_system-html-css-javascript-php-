<?php

include ('include/connection.php');
    include ('include/session.php');

if(isset($_POST['submit'])){
    

    $name = $_POST['name'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM users WHERE name = '$name' AND password = '$password'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
            
            
            //Creating Session
            checkSession();  
            $_SESSION["name"] = $row['name'];
            $_SESSION["id"] = $row['id'];
            $_SESSION["type"] = $row['type'];
        
            $type= $row['type'];
            //echo $usertype;

            if($type == '1' ){
                header("Location: admin.php");
            }
            elseif ($type == '0'){
                header("Location: custormerInterface.php");
            }
            
    }
    else{        
        $message = base64_encode(urlencode("Invalid Email or Password"));
        header('Location:login.php?msg=' . $message);
        exit();
    }
    
}

mysqli_close($conn);
    
    
?>