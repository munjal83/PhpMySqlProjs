<?php

	//Creating database connection_aborted
	$db_host = 'localhost';
	$db_name = 'quizmaster';
	$db_user = 'root';
	$db_pass = 'dslr1100d';
	
	//Create mysqli object
	
	$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);
	 
	if($mysqli->connect_error){
		
		printf("Failed to connect to the database: %s\n", $mysqli->connect_error);
		exit();
	
}

?>