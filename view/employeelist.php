<?php 
    session_start();
    if(!isset($_SESSION['username']))
    {
        header("Location:login.php");
    }
    
    include('../model/Connection.php');


?>
<head>
    <title>Employee List</title>
</head>
<body style="background-color:rgb(245, 245, 220);">
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="GET">
<h1>Employee Information :</h1>

<table  >
     <?php echo "<table border='1'>" ?>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>POST</th>
        <th>Number</th>
        

    </tr>


    <?php
        if($conn->connect_error)
        {
            die("Connection failed: ".$conn->connect_error);
        }

        $sql = "SELECT * FROM employee";
        $result = $conn->query($sql);

        if($result->num_rows>0)
        {
            while($row=$result->fetch_assoc())
            {
                echo "<tr>
                <td>".$row["id"]."</td>
                <td>".$row["firstname"]."</td>
                <td>".$row["post"]."</td>
                <td>".$row["mobileno"]."</td>
                <tr>";

            }
            echo "</table>";
        }
        else
        {
            echo "No record";

        }
        $conn->close();

    ?>
</table>


            <a href="../controller/logout.php">Logout</a>
            <br>
        <br>
        <button type="submit" "../new_final/home.php">Back</button>
        <button type="submit" formaction="employee.php">Upload Employee Information</button>

            <br><br>




        </form>
        
    
    </body>
      