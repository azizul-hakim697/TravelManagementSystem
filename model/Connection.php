<?php 
	
	
		$hostname = "localhost";
		$username = "root";
		$password = "";
		$dbname = "project";

		$conn =  mysqli_connect($hostname, $username, $password, $dbname);

		 if($conn)
		 {
		 	echo "Database Connection successful ";

		 }
		 else{
		 	echo"Connection failed".mysqli_connect_error();

		 } 

?>