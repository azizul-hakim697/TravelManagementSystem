
 <?php
    session_start();
    if(!isset($_SESSION['username']))
    {
        header("Location:login.php");
    }
    
    

    include("../controller/changeAction.php");

?>    

<html>
<head>
    <title>Change Password</title>
    <script src="js/changeValidation.js"></script>
</head>
    <body>

      
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" novalidate onsubmit="return validate(this);">
        <fieldset>
          <h1>Change password</h1>

          <label for="username">Username</label>
            <input type="text" name="username" id="username" value="<?php echo $username; ?>">
            <span id ="userErrMsg"></span>
           
          <br><br>
          <label for="password">New Password</label>
            <input type="password" name="password" id="password" value="<?php echo $password; ?>">
            <span id ="passErrMsg"></span>
            
          <br><br>
          <input type="submit" name="submit" value="Update">
          <br><br>
          
          </fieldset>
          <a href="../controller/logout.php">Logout</a></label>
  
  </form>
</body>
</html>



           
            
        
  