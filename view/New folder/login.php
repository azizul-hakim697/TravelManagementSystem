<?php
   
    include('../controller/loginAction.php');

?>
    <html>
    <head>
        <title>Login</title>
        <script src="js/loginValidation.js"></script>
    </head>
    <body style="background-color:rgb(206, 255, 142);">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" novalidate onsubmit="return validate(this);">
        <fieldset>
            <legend>Login Page</legend>
            <label for="username">Username</label>
            <input type="text" name="username" id="username" value = "<?php if(isset($_COOKIE['username'])) echo $_COOKIE['username']; ?>">
            <span id="userErrMsg"></span>
            <br>
            <span><?php echo $userErrMsg?></span> 
            
            <br><br>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" value = "<?php if(isset($_COOKIE['password'])) echo $_COOKIE['password']; ?>">
            <span id="passErrMsg"></span>
            <br>
            <span><?php echo $userErrMsg?></span>
            
            
            <br><br>
            <label for="remember">Remember me</label>
            <input type="checkbox" name="remember" value="1">

            <br><br>
          <a href="forget.php">Forgotten password?</a></label>
        </fieldset>
        <input type="submit" name="submit" value="Login">
        <br><br>
          <a href="registration.php">Sign Up</a></label>
    </form>

    
    </body>
</html>
<?php

    //include('footer.php');
?>