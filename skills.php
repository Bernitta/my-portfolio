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

        <div class="browse">
            <div class="skills">
                <button class="active" onclick="display('skills')" id="skills2">Skills</button>
            </div>
            <div class="tech" >
                <button onclick="display('tech')" id="tech2">Technology</button>
            </div>

        </div>
        
        <div class="skillList open" id="skillList"> <!--div for the skills list-->
            <h2>My Skills</h2>
            <ul style="margin-top: -70px;">
               <li>
                    <div class="project2 select" id="skill1" style="grid-column-start: 1; grid-column-end: 2; grid-row-start: 1; grid-row-end: 2;" onclick="projectDetails('skill1')">
                        <h1 class="projTitle2">Computer Skills</h1> <!--name of skill-->
        
                    </div>
               </li>
               <li>
                    <div class="project2 select" id="skill2" style="grid-column-start: 2; grid-column-end: 3; grid-row-start: 1; grid-row-end: 2; " onclick="projectDetails('skill2')">
        
                        <h1 class="projTitle2">HTML5</h1> <!--name of skill-->
        
                    </div>
               </li>
                <li>
                    <div class="project2 select" id="skill3"style="grid-column-start: 1; grid-column-end: 2; grid-row-start: 2; grid-row-end: 3;" onclick="projectDetails('skill3')">
        
                        <h1 class="projTitle2">CSS</h1> <!--name of skill-->
        
                    </div>
                </li>

                <li>
                    <div class="project2 select" id="skill3"style="grid-column-start: 1; grid-column-end: 2; grid-row-start: 2; grid-row-end: 3;" onclick="projectDetails('skill4')">
        
                        <h1 class="projTitle2">Git</h1> <!--name of skill-->
        
                    </div>
                </li>
            </ul>
        </div>

        <div class="techList close" id="techList"> <!--div for the techs list-->
            <h2>Technology</h2>
            <ul style="margin-top: -150px;">
               <li>
                    <div class="project2 select" id="tech1" style="grid-column-start: 1; grid-column-end: 2; grid-row-start: 1; grid-row-end: 2;" onclick="projectDetails('tech1')">
                        <h1 class="projTitle2">Visual Studio Code</h1> <!--name of tech-->
        
                    </div>
               </li>
               <li>
                    <div class="project2 select" id="tech2" style="grid-column-start: 2; grid-column-end: 3; grid-row-start: 1; grid-row-end: 2; " onclick="projectDetails('tech2')">
        
                        <h1 class="projTitle2">Mysql</h1> <!--name of tech-->
        
                    </div>
               </li>
            </ul>
        </div>

        <div class="projectDisplay">

            <h1 class="projTitle" id="projDisplayTitle">Please Select An Option</h1>

            <p class="projText" id="projDisplayText" style="font-family: Arial, Helvetica, sans-serif;"></p>

        </div>

       <!--<div class="overlay">
         <div class="overlay-inner">
            <button class="close">Close X</button>
            <h3 id="overlayTitle"></h3>
         </div>
       </div>-->

        <div class="footer2">
            
        </div>
    </div>
    
</body>
</html>