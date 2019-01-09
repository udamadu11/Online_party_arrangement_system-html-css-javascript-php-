<?php  
	
	if(isset($_POST['submit']))
		include('include/connection.php');
	{
		
		$event =$_POST['event'];
		$file = addcslashes(file_get_contents($_FILE["../img/im"]["image"]));
		$eventplace =$_POST['eventplace'];
		$guest =$_POST['guest'];
		$dat =$_POST['dat'];
		$eq =$_POST['eq'];
		foreach ($name as $eq) {
			echo $eq."<br/";
		}
		$fo =$_POST['fo'];
		foreach ($name as $efo) {
			echo $fo."<br/";
		}
		$pre =$_POST['pre'];
		foreach ($name as $pre) {
			echo $pre."<br/";
		}
		$lightning =$_POST['lightning'];
		$flower =$_POST['flower'];
		$seating =$_POST['seating'];
		

		$query ="INSERT INTO product (event,image,event place,guest,dat,eq,fo,pre,lightning,flower,seating) VALUES ('$event','$image','$eventplace','$guest','$dat','$eq,'$fo','$pre','$lightning','$flower','$seating')";
		$result = mysqli_query($conn, $query);
	}



?>