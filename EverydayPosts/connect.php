<?php
	
	//Connecting to database
	$connect = mysqli_connect("localhost", "root", "dslr1100d", "bulletin");
	
	//Checking the connection
	if(mysqli_connect_errno()){
		
		echo 'Could not connect to the database: ' .mysqli_connect_errno();
	
	}

?>