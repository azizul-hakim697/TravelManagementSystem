<?php
    
    session_start();
    if(!isset($_SESSION['username']))
    {
        header("Location:login.php");
    }
   
      
?>
<!DOCTYPE html>
<html>
<head>
    <title>ADMIN PANEL</title>
    <link rel="stylesheet" type="text/css" href="buttonstyle.css">
</head>
<h1>ADMIN PANEL</h1>
<h2>Welcome</h2>
<body align = "center" style="background-color:rgb(245, 245, 220);">

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">
            <br>

            
                        <button class="my-button1" type="submit" formaction="customerProfile.php">View profile</button>
                        <br><br>
                        <br><br>
                        <button class="my-button2" type="submit" formaction="employeelist.php">Employee</button>
                            <br><br>
                            <br><br>
                        <button class="my-button2" type="submit" formaction="packageList.php">Package</button>
                            <br><br>
                            <br><br>
                        <button class="my-button3" type="submit" formaction="changePass.php">Change Password</button>

                        <br><br>
                        <br><br>
                        <button class="my-button4" type="submit" formaction="../controller/logout.php">Logout</button>
                
        
            
        </form>
    </body>
</html>
