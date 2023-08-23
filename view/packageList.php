<?php 
    session_start();
    if(!isset($_SESSION['username']))
    {
        header("Location:login.php");
    }
    include "header.php";
    include('../model/Connection.php');
?>

<head>
    <title>Package List</title>
</head>
<body style="background-color:rgb(245, 245, 220);">
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="GET">
<h1>Package Information :</h1>

<table>
     <?php echo "<table border='1'>" ?>
    <tr>
        <th>Package Name</th>
        <th>Hotel Name</th>
        <th>Location</th>
        <th>Cost</th>
        <th>Rating</th>

    </tr>
    <?php
        if($conn->connect_error)
        {
            die("Connection failed: ".$conn->connect_error);
        }

        $sql = "SELECT * FROM package";
        $result = $conn->query($sql);

        if($result->num_rows>0)
        {
            while($row=$result->fetch_assoc())
            {
                echo "<tr><td>".$row["packagename"]."</td><td>".$row["hotelname"]."</td><td>".$row["location"]."</td><td>".$row["cost"]."</td><td>".$row["rating"]."</td></tr>";

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
        <button type="submit" formaction="packageRegi.php">Upload Package</button>

            <br><br>




        </form>
        
    
    </body>
       