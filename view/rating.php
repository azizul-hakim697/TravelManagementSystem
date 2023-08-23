<?php 
    session_start();
    if(!isset($_SESSION['username']))
    {
        header("Location:login.php");
    }
    include "header.php";
    $rate="";
    $rateErrMsg="";
    if ($_SERVER['REQUEST_METHOD'] === "POST") {

            function test_input($data) {
                $data = htmlspecialchars($data);
                return $data;
            }

            $rate=test_input($_POST['rate']);

            $message = "";
            if (empty($rate)) {
                $rateErrMsg = "Please fill the form";
            }
            
            else {
                echo $message;
            }
        }

?>
<html>
<head>
    <title>Rating package</title>
    <script src="js/ratingValidation.js"></script>
</head>

    <body>
      
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" novalidate onsubmit="return validate(this);">
          <form>
            <fieldset>
          <h1>Rate service</h1>
          <label for="packagename">Package Name</label>
          <input type="text" name="packagename" id="packagename">
          <span id="packageErrMsg"></span>
          
          
          
          <br><br>
          <label for="rate">Rating </label>
          <input type="rate" name="rate" id="rate">
          <span id="rateErrMsg"></span>
          <span><?php echo $rateErrMsg; ?></span>
          
          
          <br><br>
          <input type="submit" name="submit" value="Update">
          <br><br>
          <button type = "submit" formaction="packageList.php">Go Back</button>
          </fieldset>
      </form>
      
  </form>
</body>
</html>
<?php
    include('footer.php');
?>