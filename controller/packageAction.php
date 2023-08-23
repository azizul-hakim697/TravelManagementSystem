
<?php

	include('../model/Connection.php');
 	
	$packagename=$packageErrMsg=$hotelname=$hotelErrMsg=$location=$locationErrMsg=$cost=$costErrMsg=$rating=$ratingErrMsg="";


	if ($_SERVER['REQUEST_METHOD'] === "POST") {

			function test_input($data) {
				$data = htmlspecialchars($data);
				return $data;
			}

			$packagename = test_input($_POST['packagename']);
			$hotelname = test_input($_POST['hotelname']);
			$location = test_input($_POST['location']);
			$cost = test_input($_POST['cost']);
			$rating = test_input($_POST['rating']);
			

			$message = "";
			if (empty($packagename)) {
				$packageErrMsg = "Package Name is Empty";
			}
			
			if (empty($hotelname)) {
				$hotelErrMsg .= "Hotel Name is Empty";
				$message .= "<br>";
			}

			if (empty($location)) {
				$locationErrMsg .= "location is Empty";
				$message .= "<br>";
			}
			if (empty($cost)) {
				$costErrMsg .= "Cost is Empty";
				$message .= "<br>";
			}
			if (empty($rating)) {
				$ratingErrMsg .= "Rating is Empty";
				$message .= "<br>";
			}
			
			
		}
	if(isset($_POST['submit']))
	{
		$packagename = $_POST['packagename'];
		$hotelname = $_POST['hotelname'];
		$location = $_POST['location'];
		$cost = $_POST['cost'];
		$rating = $_POST['rating'];
		
		if ($packagename != '' && $hotelname != '' && $location != ''&& $cost != '' && $rating !='')
		{
			$sql = "INSERT INTO package(packagename, hotelname, location, cost, rating) VALUES('$packagename', '$hotelname', '$location', '$cost', '$rating')";

		if($conn->query($sql)==true)
		{
			header("Location: ../view/packageList.php");
			
		}

		}
		else
		{
			echo "Fill up all forms";
		}

		$conn->close();

		

		
	}
?>