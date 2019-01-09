<?php
	
	if (isset($_POST['submit'])) {
		include ('feedbackserver.php');
		
		$f_name =$_POST['f_name'];
		$f_email =$_POST['f_email'];
		$feedback =$_POST['feedback'];


				$sql = "INSERT INTO feedb (f_name ,f_email ,feedback) VALUES ('$f_name','$f_email','$feedback')";
				mysqli_query($conn, $sql);//passing sql	
	}
	
	?>