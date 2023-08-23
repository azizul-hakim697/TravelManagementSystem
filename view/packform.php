<?php


	include("../controller/packAction.php");
	

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Package</title>
</head>
<body>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" novalidate onsubmit="return validate(this);">
		
			<h1>Package Details</h1>
		<fieldset>

		
		<label for="firstname">Package Name</label>
			<input type="text" name="firstname" id="firstname" value="<?php echo $firstname; ?>">
			<span id ="firstErrMsg"></span>
			<span><?php echo $firstnameErrMsg; ?></span>
			


			<br><br>
			
			<label for="lastname">Location</label>
			<input type="text" name="lastname" id="lastname" value="<?php echo $lastname; ?>">
			<span id ="lastErrMsg"></span>
			<span><?php echo $lastnameErrMsg; ?></span>
				<br><br>

				
			<label for="mobileno">Price in TK</label>
			<input type="mobileno" name="mobileno" id="mobileno"
			value="<?php echo $mobileno; ?>">
			<span id ="mobileErrMsg"></span>
			<span><?php echo $mobileErrMsg; ?></span>
				<br><br>
			<button type="submit" name="save">Save</button>
			</fieldset>

	</form>
</body>
</html>