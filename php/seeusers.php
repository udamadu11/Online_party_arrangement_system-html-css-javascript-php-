<?php include('usersconection.php'); ?>
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

<?
		 //fetch the record to be update
		 if (isset($_GET['edit'])) {
		 		$id = $_GET['edit'];
		 		$$edit_state =true;
		 		$rec =mysqli_query($db, "SELECT * FROM users WHERE id=$id");
		 		$record =mysqli_fetch_array($rec);
		 		$name =$record['name'];
		 		$email =$record['email'];
		 		$password =$record['password'];
		 		$id =$record['id'];
		 	}	


?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit, Delete, update</title>
	<link rel="stylesheet" type="text/css" href="../css/seeusers.css">
</head>
<body>
	<table>
	<thead>
		<tr>
			<th>Name</th>
			<th>Email</th>
			<th>Password</th>
		</tr>
	</thead>
	<tbody>
		<?php while ($row =mysqli_fetch_array($result)) { ?>
		<tr>
			<td><?php echo $row['name']  ?></td>
			<td><?php echo $row['email']  ?></td>
			<td><?php echo $row['password']  ?></td>
			<td><a class="edit_btn" href="seeusers.php?edit=<?php echo $row['id']; ?>">Edit</a></td>
			<td><a class="dele_btn" href="seeusers.php?del=<?php echo $row['id']; ?>">Delete</a></td>
		</tr>
			<?php } ?>
	</tbody>
	</table>
	<div class="form1"> 
		<h2>Edit - Add - Delete</h2>
	<form action="seeusers.php" method="post">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
			<div class="input">
					<lable>NAME:</label>
					<input type="text" name="name" id="name" placeholder=" Enter User Name" value="<?php echo $name ?>">
			</div>	
			<div class="input">
					<lable>E-MAIL:</lable>
					<input type="email" name="email" id="email" placeholder="Enter the email" value="<?php echo $email ?>">
			</div>
			<div class="input">
					<lable>PASSWORD:</lable>
					<input type="password" name="password" id="password" placeholder="Enter the password" value="<?php echo $password ?>">
			</div>
			<div class="input">
					<?php if ($edit_state == false): ?>
					<button type="submit" name="submit" class="btn">Save</button> 
					<?php else: ?>
						<button type="submit" name="update">Update</button>
					<?php endif ?>
			</div>
					
		</form>
		</div>
</body>
</html>