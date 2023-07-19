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
        <div class="img_slider" >

            <img name="img"class="img" alt="">
             
        </div>
        <div class="form" >
           
            <form action="">

                    <div style=" grid-row-start: 1; grid-row-end: 2;">
                        <p style="color: black;">CONTACT US</p>
                    </div>
    
                    <div style="grid-row-start: 2; grid-row-end: 3;">
                        <label for=""> First Name</label>
                        <input type="text" placeholder="First Name" required>
                    </div>

                    <div style="grid-row-start: 3; grid-row-end: 4;">
                        <label for="" > Last Name</label>
                        <input type="text" placeholder="Last Name" required>
                    </div>

                    <div style="grid-row-start: 5; grid-row-end: 6;">
                        <label for="" > Email</label>
                        <input type="email" placeholder="email" style=" margin-left:32px;" required>
                    </div>

                    <div style="grid-row-start: 6; grid-row-end: 7;">
                        <input type="text" placeholder="Message" style="height:100px; width: 250px"required>
                    </div>

                    <div style="grid-row-start: 7; grid-row-end: 8;">
                        <input type="submit" placeholder="Submit" value="Submit" style="height:20px; width: 100px; margin-left:80px;" required>
                    </div>


            </form>
             
        </div>
        <div class="welcome">
            <h1>Welcome Guest!</h1>
            <?php
                // SQL query to retrieve data from the database
                $sql = "SELECT * FROM homepage";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<br>" . $row["welcome_note"]. "<br>";
                    }
                } else {
                    echo "0 results";
                }
                // Close the connection
                $conn->close();
                ?>
        
        
        </div>
        

        <div class="footer">
        </div>
    </div>
    <div class="container1">
    <h1>Demo</h1>
    </div>
</body>
</html>