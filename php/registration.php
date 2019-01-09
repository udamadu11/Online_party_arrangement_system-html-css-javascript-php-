<?php
	
	if (isset($_POST['submit'])) {
		include ('server.php');
		
		$name =$_POST['name'];
		$email =$_POST['email'];
		$password =$_POST['password'];


				//Check if email already exists
        $selemail= "SELECT * FROM users WHERE email ='$email' " ;
        $allequery = mysqli_query($conn, $selemail );  
        $result = mysqli_num_rows($allequery);
    
        if($result > 0){
        $message = base64_encode(urlencode("Email already exists"));
        header('Location:register.php?msg=' . $message);
        exit();
        }
        
        //Insert to Database
        else {
            $registrationQuery = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
            
            if (mysqli_query($conn,$registrationQuery) === TRUE) {
                $message = base64_encode(urlencode("Registration Successful"));
				header('Location:login.php?msg=' . $message);
				exit();
            } 
            
            else {
                $message = base64_encode(urlencode("SQL Error while Registering"));
				header('Location:.custormerInterface.php?msg=' . $message);
				exit();
            }
        }

}


?>