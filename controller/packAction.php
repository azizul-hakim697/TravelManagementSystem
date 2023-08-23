<?php

	include('../model/Connection.php');

	$firstname = "";
	$firstnameErrMsg = "";

	$lastname = "";
	$lastnameErrMsg = "";

	$mobileno = "";
	$mobileErrMsg = "";

	if ($_SERVER['REQUEST_METHOD'] === "POST") {

			function test_input($data) {
				$data = htmlspecialchars($data);
				return $data;
			}

			$firstname = test_input($_POST['firstname']);
			$lastname = test_input($_POST['lastname']);
			$mobileno = test_input($_POST['mobileno']);

			$message = "";
			if (empty($firstname)) {
				$firstnameErrMsg = "First Name is Empty";
			}
			else {
				if (!preg_match("/^[a-zA-Z-' ]*$/",$firstname)) {
				$firstnameErrMsg = "Only letters and spaces allowed.";
				}
			}
			if (empty($lastname)) {
				$lastnameErrMsg .= " Name is Empty";
				$message .= "<br>";
			}

			if (empty($mobileno)) {
				$mobileErrMsg .= "Location is Empty";
				$message .= "<br>";
			}
			else {
				if (!preg_match("/^[0-9-' ]*$/",$mobileno)) {
				$mobileErrMsg = "Numerical Values Accepted.";
				}
			}

			if ($message === "") {
				$regiUpdate = "Package Uploaded";

			}
			else {
				echo $message;
			}
		}
	

	if(isset($_POST['save']))
			{
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$mobileno = $_POST['mobileno'];

		if ($firstname != '' && $lastname != '' && $mobileno !='')
			

			{
			
			$sql = "INSERT INTO packdab(firstname, lastname, mobileno) VALUES('$firstname', '$lastname' '$mobileno')";
			

			if($conn->query($sql)==true)
		{
			echo "Entry Filled";
			
		}

		}
		else
		{
			die($sql->error);
		}

		$conn->close();





	}