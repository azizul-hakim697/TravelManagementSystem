<?php
 
    include('../controller/loginAction.php');

?>
    <html>
    <head>

        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="loginstyle.css">

        
        <script src="js/loginValidation.js"></script>
        
        
    </head>
    <body class="submission-form"method style="background-color:rgb(245, 245, 220);">
        <h1 text align="center">ADMIN LOGIN</h1>
        
        <div class="body">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" novalidate onsubmit="return validate(this);">
        

          <fieldset class="field">
            <legend>Login Page</legend>
              
            <label for="username">Username</label>
            <input class="in2" type="text" name="username" id="username" value = "<?php if(isset($_COOKIE['username'])) echo $_COOKIE['username']; ?>">
            <span id="userErrMsg"></span>
            <br>
            <span><?php echo $userErrMsg?></span> 
            
            <br><br>
            <label for="password">Password</label>
            <input class="in3" type="password" name="password" id="password">
            <span id="passErrMsg"></span>
            <br>
            <span><?php echo $userErrMsg?></span>
            
            
            <br><br>
            <label for="remember">Remember me</label>
            <input type="checkbox" name="remember" id='remember'  value="remember" <?php echo(isset($_COOKIE['username']))? "checked" : "" ; ?> >

            <br><br>
          <a href="forget.php">Forgotten password?</a></label>
        </fieldset>
        <input class="but" type="submit" name="submit" value="Login">
        <br><br>
          <a href="registration.php">Sign Up</a></label>
    </form>

    </div>
    </div>
    </body>
</html>
