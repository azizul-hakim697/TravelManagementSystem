<?php
include("header.php");
include('../controller/employeeAction.php');
?>
<html>
<head>
	<title>Employee Registration</title>
	
</head>
<body style="background-color:rgb(245, 245, 220);">

	<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" novalidate>
		

		<fieldset>
			

			<label for="firstname">Employee Name</label>
			<input type="firstname" name="firstname" id="firstname">
			<span><?php echo $firstnameErrMsg ;?></span>

			<br><br>

			<label for="post">Post</label>
			<input type="post" name="post" id="post">
			<span><?php echo $postErrMsg ;?></span>
			
			<br><br>

			<label for="mobileno">Mobile Number:</label>
			<input type="mobileno" name="mobileno" id="mobileno">
			<span><?php echo $mobilenoErrMsg ;?></span>
			
			<br><br>

			

			</select>
			
			<br><br>


			

		</fieldset>

		

		

		<input class="button-3" type="submit" name="submit" value="Register">
	</form>

</body>
</html>
