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
    <title>User page</title>
    <link rel="stylesheet" type="text/css" href="../css/services.css">
</head>
<table>
<tr>
<td><h1><font color="white">User page</font></h1>
<div class="left">
    <ul>
        <li><a href="users-adm.php" target="frame">View user</a></li>
        <li><a href="useradd.php" target="frame">Add user</font></a></li>
        <li><a href="edituser.php" target="frame">Edit user</a></li>
        <li><a href="deluser.php" target="frame">Delete user</a></li>
    </ul>
</div><!--left-->
</td>
<td>
<div class="content">
        <iframe
        Src="users-adm.php"
        Name="frame"
        Width=1200px Height=660px>
       </iframe>


</div><!--content-->

</td>
</tr></table>
</body>




</html>