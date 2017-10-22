<?php 

	$db_host = 'localhost';
	$db_user = 'root';
	$db_pass = '';


	$db_name = 'chat';


	if( $connection = mysqli_connect($db_host, $db_user, $db_pass )) {
		$feedback[] =  'Connected to Database ... <br/>';

		if ($database = mysqli_select_db($connection, $db_name)){
			$feedback[] =  "Database has been selected ... <br/>";
		}

		else {
			$feedback[] =  "Database was not found ... <br/>";
		}

	}

	else {
		$feedback[] =  "Unable to connect MYSQL server. <br/>";
	}	

	


?>