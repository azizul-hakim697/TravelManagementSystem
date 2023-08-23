<?php

	include("Connection.php");

	$findresult = mysqli_query($conn, " SELECT * FROM dabtab1 WHERE username = '$username'");

	if($res = mysqli_fetch_array($findresult))
		{

			$username = $res['username'];
			$password = $res['password'];

		}

	if(isset($_POST['submit']))
		{
			$password = $_POST['password'];
			$sql= " SELECT * FROM dabtab1 WHERE username = '$username'";
			res = mysqli_query($conn,$sql); 
		}

	if(mysqli_num_rows($res)>0)
		{
			$row = mysqli_fetch_assoc($res);

		}

		$result = mysqli_query($conn," UPDATE dabtab1 SET password = '$password'WHERE username='$username'");
			if($result)
				{
					echo "Recoverd password";
					echo "Return to Login Page again.";

				}
				else
				{
					echo "Failed";

				}
				}
		?>				