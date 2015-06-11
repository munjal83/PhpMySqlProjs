<?php
	
	include('connect.php');
	
	//Check if button is pressed
	
	if(isset($_POST['submit'])){
		
		$name = mysqli_real_escape_string($connect, $_POST['name']);
		$message = mysqli_real_escape_string($connect, $_POST['message']);
		
		//Set timezone_abbreviations_list
		
		date_default_timezone_set('America/New_York');

		$time = date('h:i:s a', time());
		
		//Validate input
		
		if(!isset($name) || $name == '' || !isset($message) || $message == ''){
			 
			 $error = "Please enter your name or message";
			 header("Location: index.php?error=".urldecode($error));
			 exit();
		}else{
		
		  $query = "INSERT INTO board (name, message, time) 
						VALUES ('$name', '$message', '$time')";
						
			
			if(!mysqli_query($connect, $query)){
				
				die('Error'.mysqli_error($connect)); 
				
			}else{
				
				header("Location: index.php");
				exit();
			
			}	
		}
	
	}

?>