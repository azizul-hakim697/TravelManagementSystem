<?php


	include("../controller/regiAction.php");
	

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ADMIN Registration</title>
	 <link rel="stylesheet" type="text/css" href="regstyle.css">
	<script src="js/regiValidation.js"></script>
	
</head>
<body style="background-color:rgb(245, 245, 220);">
	<h1 text align="center">ADMIN REGISTRATION FORM</h1>

	
	

	<form class="submission-form"method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" novalidate onsubmit="return validate(this);">
		<fieldset class="field">
			<legend>General</legend>

			<label for="firstname">First Name</label>
			<input class="in1" type="text" name="firstname" id="firstname" value="<?php echo $firstname; ?>">
			<span id ="firstErrMsg"></span>
			<span><?php echo $firstnameErrMsg; ?></span>
			


			<br><br>

			<label for="lastname">Last Name</label>
			<input class="in2" type="text" name="lastname" id="lastname" value="<?php echo $lastname; ?>">
			<span id ="lastErrMsg"></span>
			<span><?php echo $lastnameErrMsg; ?></span>
			
			<br><br>

			<label for="username">Username</label>
			<input class="in3" type="text" name="username" id="username" value="<?php echo $username; ?>">
			<span id ="userErrMsg"></span>
			<span><?php echo $userErrMsg; ?></span>
			
			<br><br>

			<label for="password">Password</label>
			<input class="in4" type="password" name="password" id="password" value="<?php echo $password; ?>">
			<span id ="passErrMsg"></span>
			<span><?php echo $passErrMsg; ?></span>

			

			<br><br>

			<label for="cpassword">Confirm Password</label>
			<input class="in5" type="password" name="cpassword" id="cpassword" value="<?php echo $cpassword; ?>">
			<span id ="cpassErrMsg"></span>
			<span><?php echo $cpassErrMsg; ?></span>
			
			<br><br>

			<label for ="gender">Gender</label>
			<input type="radio" name="gender" id="male" value="male"<?php echo ($gender == 'male')?'cheked':''?>>
			<label for="male">Male</label>
			<input type="radio" name="gender" id="female" value="female" <?php echo ($gender == 'female')?'cheked':''?>>
			<label for="female">Female</label>
			<span id ="genderErrMsg"></span>
			<span><?php echo $genderErrMsg; ?></span>

			

			
			<br><br>

		</fieldset >

		<fieldset  class="field">
			<legend>Contact</legend>

			<label for="email">Email</label>
			<input class="in6" type="email" name="email" id="email"
			value="<?php echo $email; ?>">
			<span id ="emailErrMsg"></span>
			<span><?php echo $emailErrMsg; ?></span>

			
			<br><br>

			<label for="mobileno">Mobile no</label>
			<input class="in7" type="mobileno" name="mobileno" id="mobileno"
			value="<?php echo $mobileno; ?>">
			<span id ="mobileErrMsg"></span>
			<span><?php echo $mobileErrMsg; ?></span>
			
			<br><br>

		</fieldset>

		<fieldset class="field">
			<legend>Address</legend>

			<label for="address1">Street/House/Road</label>
			<input class="in8" type="text" name="address1" id="address1"value="<?php echo $address1; ?>">
			<span id ="address1ErrMsg"></span>
			<span><?php echo $adsErrMsg; ?></span>
			

			<br><br>

			<label for="country">Country</label>
			<select name="country" id="country">
				<option value="bd">Bangladesh</option>
				<option value="usa">USA</option>
			</select>

			<br><br>

		</fieldset>
		<input class="but" type="submit" name="submit" value="Register">
		
		
	</form>

	<label><h2>Already have an account?</h2>
	<a href="login.php">Login</a></label>

</body>
</html>
