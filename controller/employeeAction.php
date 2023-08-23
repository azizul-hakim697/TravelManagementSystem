<?php

	include('../model/Connection.php');

	$firstname = "";
	$firstnameErrMsg = "";

	$post = "";
	$postErrMsg = "";

	$mobileno = "";
	$mobilenoErrMsg = "";

	

	if ($_SERVER['REQUEST_METHOD'] === "POST") {

			function test_input($data) {
				$data = htmlspecialchars($data);
				return $data;
			}

			$firstname = test_input($_POST['firstname']);
			$post = test_input($_POST['post']);
			$mobileno = test_input($_POST['mobileno']);
			

			$message = "";
		if (empty($firstname)) {
				$firstnameErrMsg .= "Name is Empty";
				$message .= "<br>";
			}	
		

			if (empty($post)) {
				$postErrMsg .= "Post is Empty";
				$message .= "<br>";
			}

	if (empty($mobileno)) {
				$mobilenoErrMsg .= "Mobile Number is Empty";
				$message .= "<br>";
			}
			




		
		if(isset($_POST['submit']))	{
			
			$id = $_POST['firstname'];
			$post = $_POST['post'];
			$mobileno = $_POST['mobileno'];
			

	  if ($firstname != ''  && $post != '' && $mobileno != '')
	  {
			
			$sql = "INSERT INTO employee(firstname,post, mobileno)
				VALUES('$firstname','$post',  '$mobileno')"; 

				if($conn->query($sql)==true)
		  {
			echo header("Location: ../view/employeelist.php");
			
		  }
 
	  }
		 else
		  {
			 echo "Fill up all forms";
		  }

		$conn->close();


	}
	}	
?>