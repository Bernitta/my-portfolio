<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>

<?php
    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bernitta";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    ?>
    <div class="container">
        <div class="navbar"> <!--div for the navigation bar-->
            <div id="home">
                <a href="index.php"> <button>HOME</button></a>
            </div>
            <div id="project">
                <a href="projects.php"> <button>PROJECT</button></a>
            </div>
            <div id="skills">
                <a href="skills.php" style="margin-left: 7px; margin-top: 10px;"> <button>SKILLS</button></a>
            </div>
            <div id="contact">
                <a href="contact.php"> <button>CONTACT</button></a>
            </div>
        </div>
        <div class="map" >

            <img class="img" src="images/7.jpg" style="position: relative; height: 400px; width: 300px;">
             
        </div>

        <div class="details">
            <h3 style="margin-left: 0px; font-size: 40px; font-family: Arial, Helvetica, sans-serif; color: azure; margin-top: -40px;">About</h3>
            
            
    <?php
    // SQL query to retrieve data from the database
    $sql = "SELECT * FROM contacts";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<br>" . $row["aboutme"]. "<br>";
        }
    } else {
        echo "0 results";
    }
    // Close the connection
    $conn->close();
    ?>




        </div>
       
             
        </div>

     
    </div>
    
</body>
</html>