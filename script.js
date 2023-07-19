var i = 0;
var images = [];
var time = 3000;

images[0] = 'images/1.jpg';
images[1] = 'images/2.jpg';
images[2] = 'images/3.jpg';

function changeImg(){
    document.img.src = images[i];

    if(i < images.length - 1){
        i++;
    }else{
        i = 0;
    }

    setTimeout("changeImg()", time);
}

window.onload = changeImg;


var projects = [[]];
var images2 = [];


projects [0][0] = "Project 1";  //project 1 name
projects [0][1] = "Project 1 Details"; //project 1 details
images2 [1] = 'images/4.jpg'; //project 1 image


projects [0][2] = "Project 2";  //project 2 name
projects [0][3] = "Project 2 Details"; //project 2 details
images2 [2] = 'images/5.jpg'; //project 2 image

projects [0][4] = "Project 3";  //project 3 name
projects [0][5] = "Project 3 Details"; //project 3 details
images2 [3] = 'images/6.jpg'; //project 3 image






projects [0][6] = "Computer Skills";  //skill 1 name
projects [0][7] = "I have some computer skills"; //skill 1 details

projects [0][8] = "HTML5";  //skill 2 name
projects [0][9] = "HTML 5 is a tool used in web development."; //skill 2 details

projects [0][10] = "CSS";  //skill 3 name
projects [0][11] = "CSS is a tool used to decorate html code."; //skill 3 details

projects [0][12] = "Git Hub";  //skill 4 name
projects [0][13] = "Git Hub is a web platform onto which programmers can share code."; //skill 4 details

projects [0][14] = "Visual Studio Code";  //tech 1 name
projects [0][15] = "Visual Studio Code is software designed by Microsoft that is mainly used to write code"; //tech 1 details

projects [0][16] = "MySql";  //tech 2 name
projects [0][17] = "MySql is mainly used for database management"; //tech 2 details


function projectDetails(x){

    if(x == "project1"){
    document.getElementById('projDisplayImg').src = images2[1];
    document.getElementById('projDisplayTitle').innerHTML = projects[0][0];
    document.getElementById('projDisplayText').innerHTML = projects[0][1];
    }

    if(x == "project2"){
    document.getElementById('projDisplayImg').src = images2[2];
    document.getElementById('projDisplayTitle').innerHTML = projects[0][2];
    document.getElementById('projDisplayText').innerHTML = projects[0][3];
    }

    if(x == "project3"){
        document.getElementById('projDisplayImg').src = images2[3];
        document.getElementById('projDisplayTitle').innerHTML = projects[0][4];
        document.getElementById('projDisplayText').innerHTML = projects[0][5];
        }

    if(x == "skill1"){
        document.getElementById('projDisplayTitle').innerHTML = projects[0][6];
        document.getElementById('projDisplayText').innerHTML = projects[0][7];
        }

    if(x == "skill2"){
        document.getElementById('projDisplayTitle').innerHTML = projects[0][8];
        document.getElementById('projDisplayText').innerHTML = projects[0][9];
        }

    if(x == "skill3"){
        document.getElementById('projDisplayTitle').innerHTML = projects[0][10];
        document.getElementById('projDisplayText').innerHTML = projects[0][11];
        }
    
    if(x == "skill4"){
        document.getElementById('projDisplayTitle').innerHTML = projects[0][12];
        document.getElementById('projDisplayText').innerHTML = projects[0][13];
        }

    if(x == "tech1"){
        document.getElementById('projDisplayTitle').innerHTML = projects[0][14];
        document.getElementById('projDisplayText').innerHTML = projects[0][15];
        }

    if(x == "tech2"){
        document.getElementById('projDisplayTitle').innerHTML = projects[0][16];
        document.getElementById('projDisplayText').innerHTML = projects[0][17];
        }
}



function display(value){

    var x = document.getElementById('skills2');
    var y = document.getElementById('tech2');
    var z = document.getElementById('tools2');

    var x1 = document.getElementById('skillList');
    var y1 = document.getElementById('techList');
    var z1 = document.getElementById('toolList');

    if(value == "skills"){
        x.classList.add('active');
        x1.classList.add('open');
        x1.classList.remove('close');
 
        y.classList.remove('active');
        y1.classList.remove('open');
        y1.classList.add('close');
 
        z.classList.remove('active');
        z1.classList.remove('open');
        z1.classList.add('close');
 
     }
 
     if(value == "tools"){
         
         x.classList.remove('active');
         x1.classList.add('close');
         x1.classList.remove('open');
  
         y.classList.remove('active');
         y1.classList.remove('open');
         y1.classList.add('close');
  
         z.classList.add('active');
         z1.classList.remove('close');
         z1.classList.add('open');
     }

     if(value == "tech"){
         
        x.classList.remove('active');
        x1.classList.add('close');
        x1.classList.remove('open');
 
        y.classList.add('active');
        y1.classList.remove('close');
        y1.classList.add('open');
 
        z.classList.remove('active');
        z1.classList.add('close');
        z1.classList.remove('open');
    }
}
/*greeting message */
let container = document.querySelector(".container1");
let timeNow = new Date().getHours();
let greeting =
  timeNow >= 5 && timeNow < 12
    ? "Good Morning"
    : timeNow >= 12 && timeNow < 18
    ? "Good Afternoon"
    : "Good evening";
container.innerHTML = `<h1>${greeting}</h1>`;
