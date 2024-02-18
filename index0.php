<?php
session_start();  
?>
<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @media ( min-width : 750px )
        {
        
           body
           {
           margin:0px;
           }
           #b1
           {
           height:70px;
           display:grid;
           grid-template-columns:50% 50%;
           background-color:#8ec1a0;
           }
           #b12
{
	text-align: right;
	margin-right: 10px;
	display: grid;
	grid-template-columns:90% 10% ;
    
}
#b121
{
	height: 60px;
	background-color: #afd3bc;
	border-radius: 30px;
	margin-left: 5%;
	margin-top: 5px;
   
}

           #b11
           {
           margin-left:10px;
           }
           .sbtn
           {
           
           height:40px;
           width:550px;
           background-color:#8ec1a0;
           color:black;
           border:0px;
           font-weight:bold;
           font-size:25px;
           float:right;
           margin-right:20px;
           margin-top: 20px;
           text-decoration:none;
           }
           
        
           #b3
           {
           height:600px;
           display:grid;
           grid-template-columns:50% 50%
           }
           #b31
           {
           width:100%;
           }
           .btn1
           {
           margin-top:0px;
          
           color:black;
           border:0px;
           font-size:20px;
           text-align:center;
           margin-left:30px ;
           text-decoration:none;
           }
           .btn1:hover
           {            
            color:#4974e9;
            cursor:pointer;
             transform:scale(1.1);
           }
                    
            .btn2
           {
           
           margin-top:0px;
           background-color:white;
           color:black;
           border:0px;
           font-size:15px;
           
           }
           .btn2:hover
           {          
            color:#4974e9;
            cursor:pointer;
            transform:scale(1.1);
           }
           #b4
           {
           padding-top:10px;
           height:30px;
           background-color:#afd3bc;
           display:grid;
           grid-template-columns:20% 20% 20%  20% 20%;
           }
           #b3a
           {
           padding-top:20px;
           height:280px;
           }
           #b3b
           {
           padding-top:20px;
           height:280px;
           }
           .img1
           {
           width:100px;
           }
           .img2
           {
           width:150px;
           height:150px;
           }
           .img3
           {
           width:180px;
           height:150px;
           }
           #b5
           {
           display:grid;
           grid-template-columns:33% 33% 33%;
           height:300px;
           }	
           
           #b6
           {
           height:240px;
           background-color:#8ec1a0;
           }
           .imgbtn
           {
           border-radius:0px;
           height:120px;
           width:200px;;
           }
           .imgbtn:img
           {
           height:120px;
           width:200px;
           }
           .prof
       {
        height:60px;
        width: 60px;
       border-radius: 50px; 
       }
       .adp
       {
        height: 25px;
        width: 25px;
       }
       .adpt
       {
        text-decoration: none;
        font-weight: bold;
        color: black;
       text
       }
       .adpt:hover
       {
        color: black;
       }
       #b11
    {
        height:20px;
           width:200px;
          margin-top: 20px;
          margin-left: 10px;
          display: inline;
    }

    .hide {
  display: none;
  
}

.myDIV:hover + .hide {

  display: block;
  color: black;
background-color:#afd3bc ;
  width: 220px;
  height: 220px;
  margin-left: 415px;
  margin-top: 42px;
padding: 10px;

}
       }
       @media ( max-width : 749px )
       {
       
       }
       </style>       
</head>
<body>
  <nav id="b1">
		<div id="b11"> 
	  <span> <a href="index0.php" class="adpt" style="font-size: 30px;">A D P
       <img src="adp.png" class="adp"></h1></span>
    </a>
	   </div>
		<div id="b12">
			   <div><h1>
         <?php
    echo $_SESSION['uid'];
?></h1>
         </div>
			   <div id="b121" class="myDIV"><a href="details.php"><img src="profile1.jpg" class="prof"></a></div>
              
	   </div>
</nav>
   
   <div id="b4">
   <div>
   <a href="s_material.php" class="btn1">Study Materials</a>
   </div>

   <div>
       <a href="Lectures.php" class="btn1">Lectures</a>
       </div>
       <div>
        <a href="internship.php" class="btn1">Internship</a>
        </div>
        <div>
            <a href="scholor.php" class="btn1">Scholorship</a>
            </div>
            <div>
                <a href="successstory.php" class="btn1">Success Story</a>
                </div>
   </div>
   
<div id="b3">
<div id="b31">
<img src="educator.jpg" alt="rjt photo is issing">
<!-- <img src="/gate.jpg" alt=""> -->
</div>
<div id="b32">
  <div id="b3a">
  <br><br><br>
 <center>
<a href="exploregate.php"style="text-decoration:none;color:black;" class="btn2">
<h2>Explore for GATE</h2></a></center>
  <br><center><button class="imgbtn"><img src="gate.jpg" class="img1"></button></center></form>
  </div>
  <div id="b3b">
  <center>
    <a href="ielts.php"style="text-decoration:none;color:black;" class="btn2">
  <h2>Explore for IELTS</h2></a></center>
 <br><center><button class="imgbtn"><img src="ielts.jpeg" class="img1"</button></form></center>
  </div>
</div>
</div>
<br><br>
<div style="background-color:whitesmoke">
<br>
<?php
if($_SESSION['b']=="computer science and engineering")
{
  echo "<a href='https://www.mygreatlearning.com/blog/latest-technologies-in-computer-science/' style='text-decoration:none;color:black'><h1><center>Computer Science And Engineering</center></h1></a>";

  echo "<br><br>";
  echo "<div id='b5'>
        <div>
            <center><h2><a href='https://about.meta.com/metaverse/' style='text-decoration:none;color:black'>Metaverse<br>Technology</a></h2>
            <br>
            <img src='meta.jpeg' style=' width:240px; height:150px;'>
            </center>
        </div>
        <div>   
        <center><h2><a href='https://bitcoin.org/en/' style='text-decoration:none;color:black'>Bitcoin<br>Technology</a></h2><br>
        <img src='bitcoin.jpeg' style=' width:240px; height:150px;'>
        </center>
        </div>
        <div>        
        <center><h2><a href='https://scienceexchange.caltech.edu/topics/quantum-science-explained/quantum-computing-computers' style='text-decoration:none;color:black'>Quantum Computing<br>Technology</a> </h2><br>
        <img src='quantum_comp.png' style=' width:240px; height:150px;'>
        </center>
        </div>
  </div>
  <br>
 ";
}
elseif($_SESSION['b']== "Electronics and Communication Engineering")
{
  
  echo "<a href='https://www.ncl.ac.uk/maths-physics/research/physics/emerging-technology-materials/electronic/' style='text-decoration:none;color:black'><h1><center>Electronics and Communication Engineering</center></h1></a>";

  echo "<br><br>";
  echo "<div id='b5'>
        <div>
            <center><h2><a href='https://www.sciencedirect.com/topics/materials-science/nanoelectronics' style='text-decoration:none;color:black'>Nano Electronics
            <br>Technology</a></h2>
            <br>
            <img src='nanotech.jpg' style=' width:240px; height:150px;'>
            </center>
        </div>
        <div>   
        <center><h2><a href='https://www.nsf.gov/pubs/2018/nsf18557/nsf18557.htm' style='text-decoration:none;color:black'>smart and autonomous systems<br>Technology</a></h2><br>
        <img src='autonomous.jpg' style=' width:240px; height:150px;'>
        </center>
        </div>
        <div>        
        <center><h2><a href='https://builtin.com/robotics' style='text-decoration:none;color:black'>Robotics
        <br>Technology</a> </h2><br>
        <img src='robo.png' style=' width:240px; height:150px;'>
        </center>
        </div>
  </div>
  <br>
  ";

}
elseif($_SESSION['b']== "Electrical & Electronics Engineering")
{
  echo "<a href='https://bgibhopal.com/blog/emerging-technologies-in-electrical-engineering/' style='text-decoration:none;color:black'><h1><center>Electrical & Electronics Engineering</center></h1></a>";

  echo "<br><br>";
  echo "<div id='b5'>
        <div>
            <center><h2><a href='https://www.igi-global.com/book/emerging-nanotechnology-applications-electrical-engineering/271357#:~:text=Nanotechnology%20aims%20to%20develop%20new,to%20the%20electrical%20engineering%20field.' style='text-decoration:none;color:black'>Nano applications
            <br>Technology</a></h2>
            <br>
            <img src='naneee.jpeg' style=' width:240px; height:150px;'>
            </center>
        </div>
        <div>   
        <center><h2><a href='https://afdc.energy.gov/fuels/electricity_infrastructure.html' style='text-decoration:none;color:black'>Electrical Vehicles<br>Technology</a></h2><br>
        <img src='ev.jpeg' style=' width:240px; height:150px;'>
        </center>
        </div>
        <div>        
        <center><h2><a href='https://iimtu.edu.in/blog/the-future-of-electrical-engineering-with-ai-ml/' style='text-decoration:none;color:black'>Artificial Intelligence
        <br>Technology</a> </h2><br>
        <img src='aieee.jpeg' style=' width:240px; height:150px;'>
        </center>
        </div>
  </div>
  <br>
  ";
}
elseif($_SESSION['b']== "Metallurgical Engineering")
{
  echo '<h1><center>'.$_SESSION['b'].'</center></h1>';
}
elseif($_SESSION['b']== "Civil Engineering")
{
  echo "<a href='https://bgibhopal.com/blog/discover-the-top-7-emerging-trends-in-civil-engineering/' style='text-decoration:none;color:black'><h1><center>Civil Engineering</center></h1></a>";

  echo "<br><br>";
  echo "<div id='b5'>
        <div>
            <center><h2><a href='https://omdayal.com/blog/photovoltaic-glaze-and-sustainability-in-engineering/' style='text-decoration:none;color:black'>Photovoltaic glazing
            <br>Technology</a></h2>
            <br>
            <img src='photovoltaic.jpg' style=' width:240px; height:150px;'>
            </center>
        </div>
        <div>   
        <center><h2><a href='https://www.twi-global.com/technical-knowledge/faqs/what-is-3d-printing#:~:text=3D%20printing%20is%20an%20additive,printing%20creates%20less%20material%20wastage.' style='text-decoration:none;color:black'>3D Printing<br>Technology</a></h2><br>
        <img src='3d.png' style=' width:240px; height:150px;'>
        </center>
        </div>
        <div>        
        <center><h2><a href='https://www.engineeringcivil.com/what-are-kinetic-roads.html' style='text-decoration:none;color:black'>Kinetic roads
        <br>Technology</a> </h2><br>
        <img src='kineticroads.jpg' style=' width:240px; height:150px;'>
        </center>
        </div>
  </div>
  <br>
  ";



}
elseif($_SESSION['b']=="Informatoinal Technology")
{
  echo '<h1><center>'.$_SESSION['b'].'</center></h1>';
}
elseif($_SESSION['b']=="Artificial Intelligence and Machine Learning")
{
  echo '<h1><center>'.$_SESSION['b'].'</center></h1>';
}
elseif($_SESSION['b']=="Computer Science and Business Systems")
{
  echo '<h1><center>'.$_SESSION['b'].'</center></h1>';
}
elseif($_SESSION['b']=="Mechanical")
{
  echo '<h1><center>'.$_SESSION['b'].'</center></h1>';
}
elseif($_SESSION['b']=="Mechtronics")
{
  echo '<h1><center>'.$_SESSION['b'].'</center></h1>';
}
else
{
  echo '<h1><center>'.$_SESSION['b'].'</center></h1>';
}
?>
<br><br>
</div>
<br>
  <center><h1>GET THE ADP's ADVANTAGES<h1></center>
<br><br>
<div id="b5">
    <div>
     <center><h2>Conceptual clarity <br> through visualization </h2></center>
      <center><img src="conceptual.png" class="img2"></center>
    </div>
    <div>
     <center><h2>Personalised Learning <br> Programs </h2></center>
      <center><img src="program.png" class="img2"></center>
    </div>
    <div>
      <center><h2>Unmatched Individual <br> Attention </h2></center>
      <center><img src="indivdual.jpg" class="img2"></center>
    </div>
</div>
<br>
<br>
  <div id="b6"><br>
    <b>Why Choose Us?<b><br>
    <p>Learning is pivotal for a student's success in academics and life. The Digital Age is deeply shaping the way students learn and will also determine their future prospects. At ADP'S, we encourage students to embrace this fast, changing world and making them ready for tomorrow by being their constant learning partner.
    We craft learning journeys for every student that address their unique needs. We believe in the power of one-to-one learning that addresses every child's learning needs, allows students to be holistically involved in their education and be active, lifelong learners.</p>
   <br><br>
   <center><a style="color:black" href="author.html">about developer</a></center><br><br>
  </div>


</body>
</html>
