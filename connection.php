<?php

// connection details
error_reporting(E_ALL ^ E_DEPRECATED);
$head_hostname = "localhost:3307";
$head_user = "root";
$head_password = "";
$head_database = "ticket_db";


	//create connection
	$dbConnection= $db = $bd = $con = $conn= mysqli_connect($head_hostname,$head_user,$head_password,$head_database);   

	
	if(mysqli_connect_errno())
	{
		echo "Failed to connect to database".mysqli_connect_error();
	}
	
?>
