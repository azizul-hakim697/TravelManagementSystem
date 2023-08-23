<?php
include("header.php");
include('../controller/packageAction.php');
?>
<html>
<head>
	<title>Package Registration</title>
</head>
<body style="background-color:rgb(206, 255, 142);">

	<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" novalidate>
		<fieldset>
			<legend>Package Information</legend>

			<label for="packagename">Package Name</label>
			<input type="text" name="packagename" id="packagename">
			<span><?php echo $packageErrMsg ;?></span>

			<br><br>

			<label for="hotelname">Hotel Name</label>
			<input type="hotelname" name="hotelname" id="hotelname">
			<span><?php echo $hotelErrMsg ;?></span>

			<br><br>

			<label for="location">Location</label>
			<input type="location" name="location" id="location">
			<span><?php echo $locationErrMsg ;?></span>
			
			<br><br>

			<label for="cost">Cost</label>
			<input type="cost" name="cost" id="cost">
			<span><?php echo $costErrMsg ;?></span>
			
			<br><br>

			<label for="rating">Rating</label>
			<input type="rating" name="rating" id="rating">
			<span><?php echo $ratingErrMsg ;?></span>

			</select>
			
			<br><br>


			

		</fieldset>

		

		

		<input type="submit" name="submit" value="Register">
	</form>

</body>
</html>
<?php
    include('footer.php');
?>