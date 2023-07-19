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

       <!-- <div class="search">
            <input type="text" value="search">
            <button>Search</button>
        </div>-->
        
        <div class="projectList">
            <ul>
               <li>
                    <div class="project2" id="project1" style="grid-column-start: 1; grid-column-end: 2; grid-row-start: 1; grid-row-end: 2;" onclick="projectDetails('project1')">
                        <h1 class="projTitle2">Project 1</h1>
        
                    </div>
               </li>
               <li>
                    <div class="project2" id="project2" style="grid-column-start: 2; grid-column-end: 3; grid-row-start: 1; grid-row-end: 2; " onclick="projectDetails('project2')">
        
                        <h1 class="projTitle2">Project 2</h1>
        
                    </div>
               </li>
                <li>
                    <div class="project2" id="project3"style="grid-column-start: 1; grid-column-end: 2; grid-row-start: 2; grid-row-end: 3;" onclick="projectDetails('project3')">
        
                        <h1 class="projTitle2">Project 3</h1>
        
                    </div>
                </li>
            </ul>
        </div>

        <div class="projectDisplay">
                        <img class="projImg" id="projDisplayImg" src="images/4.jpg" alt="">
        
                        <h1 class="projTitle" id="projDisplayTitle">Project 1</h1>
        
                        <p class="projText" id="projDisplayText">The word "dessert" comes from the Old French word
                             "desservir" which means to clean the table.
                              Tradition says the name comes from entertaining hosts and servants using sweet finishing
                              dishes to denote the end of a meal and a time for people to leave the table.</p>

        </div>

        <div class="footer">
            
        </div>
    </div>
    
</body>
</html>