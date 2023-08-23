 <?php
	


	include("../controller/regiAction.php");
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Customer Registration</title>
	<style>
		#filename {
			position: relative;
			top: 20px;
			left: 300px;
			font-weight: bolder;
		}
	</style>
</head>
<body>
	<h1 style="border:2px solid DodgerBlue;">New Admin Resgistration</h1>
	

	<label>Already have an account?
	<a href="login.php">Login</a></label>
	

	
	<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" novalidate>
		<fieldset>
			<legend>General</legend>

			<label for="fname">First Name</label>
			<input type="text" name="firstname" id="fname" value="<?php echo $firstname; ?>">

			<span><?php echo $firstnameErrMsg; ?></span>

			<br><br>

			<label for="lname">Last Name</label>
			<input type="text" name="lastname" id="lname" value="<?php echo $lastname; ?>">

			<span><?php echo $lastnameErrMsg; ?></span>

			<br><br>

			<label for="uname">Username</label>
			<input type="text" name="username" id="uname">

			<br><br>

			<label for="password">Password</label>
			<input type="password" name="password" id="password">

			<br><br>

			<label for="cpassword">Confirm Password</label>
			<input type="password" name="cpassword" id="cpassword">

			<br><br>

			<label>Gender</label>
			<input type="radio" name="gender" id="male" value="male"<?php echo ($gender == 'male')?'cheked':''?>>
			<label for="male">Male</label>
			<input type="radio" name="gender" id="female" value="female" <?php echo ($gender == 'female')?'cheked':''?>>
			<label for="female">Female</label>

			<span><?php echo $genderErrMsg; ?></span>

			
			<br><br>

		</fieldset>

		<fieldset>
			<legend>Contact</legend>

			<label for="email">Email</label>
			<input type="email" name="email" id="email"
			value="<?php echo $email; ?>">

			<span><?php echo $emailErrMsg; ?></span>
			<br><br>

			<label for="mobileno">Mobile No</label>
			<input type="text" name="mobileno" id="mobileno"value="<?php echo $mobileno; ?>">
			<span><?php echo $mbnoErrMsg; ?></span>

			<br><br>

		</fieldset>

		<fieldset>
			<legend>Address</legend>

			<label for="address1">Street/House/Road</label>
			<input type="text" name="address1" id="address1"value="<?php echo $address1; ?>">
			<span><?php echo $adsErrMsg; ?></span>

			<br><br>

			<label for="country">Country</label>
			<select name="country" id="country">
				<option value="bd">Bangladesh</option>
				<option value="usa">USA</option>
			</select>

			<br><br>

		</fieldset>

		<input type="submit" name="submit" value="Register">
	</form>

</body>
</html>
