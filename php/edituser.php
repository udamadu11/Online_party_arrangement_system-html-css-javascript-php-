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
    <title>Admin Edituser</title>
    <link rel="stylesheet" type="text/css" href="../css/edituser.css">
</head>
    
<body>
    
   <!-- <?php// include('include/header.php') ?>
    <div class="row-50">-->
       <div class="form">
        <form method="post"> 
           <!-- <h2 class="error-msg"><?php //include_once('include/message.php'); ?></h2> -->
            <p>Search Name</p>
            <input type="text" name="searchName" placeholder="Enter name">
            <input type="submit" name="submit" value="Search name" class="button">
            
        </form>  
    </div>
    
    <?php
    
        if(isset($_POST['submit'])){

            $name = $_POST['searchName'];


            $seluser = "SELECT * FROM users WHERE  name ='$name' ";

            $query = mysqli_query($conn,$seluser);


                while($row = mysqli_fetch_assoc($query)){
                    
                    echo "
                    
                        <div class=\"form2\">
                            <form action=\"usersedit.php\" method=\"post\">                   
                                <p>Name</p>
                                <input type=\"text\" name=\"editName\" placeholder=\"Edit name\" value=\"{$row['name']}\" required>    

                                <p>Email address</p>
                                <input type=\"email\" name=\"editEmail\" placeholder=\"email\" value=\"{$row['email']}\" required>

                                <p>Password</p>
                                <input type=\"password\" name=\"editPassword\" placeholder=\"Enter Password\" required>

                              <input type=\"hidden\" value=" .$row['id']. " name=\"editId\">


                                <input type=\"submit\" class=\"button\" name=\"editSubmit\" value=\"EDIT\" required >
                            </form>
                        </div>
                    "

                        ;


            }              

        }
    ?>

</body>
   
    
</html>