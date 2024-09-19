<?php
session_start();  
?>
<html>
<head>
<link rel="stylesheet" href="styles/style3.css">
</head>
<body>

	<nav id="b1">
		<div id="b11"> 
	  <span> <a href="index0.php" class="adpt" style="font-size: 30px;">A D P
       <img src="pic/adp.png" class="adp"></h1></span>
    </a>
	   </div>
		<div id="b12">
			   <div><h1>
         <?php
    echo $_SESSION['uid'];
?></h1>
         </div>
			   <div id="b121"><img src="pic/profile1.jpg" class="prof"></div>
	   </div>
</nav>
		<div id="b4">
			<div>
			<a href="" class="btn1">Study Materials</a>
			</div>
		 
			<div>
				<a href="Lectures.php" class="btn1">Lectures</a>
				</div>
				<div>
				 <a href="internship.php" class="btn1">Internship</a>
				 </div>
				 <div>
					 <a href="scholor.php" class="btn1">Scholarship</a>
					 </div>
					 <div>
						 <a href="successstory.php" class="btn1">Success Story</a>
						 </div>
			</div>
		
		<br><br>	<center><h1> Choose Your Branch For Study Materials </h1></center><br><br>
<div id="smat" >
<ul>
<li><a href="csenotes.php" ><h2>Computer science and Engieering</h2></a><br></li>
<li><a href="ecenotes.php"><h2>Electronics and Communication Engineering</h2></a><br></li>
<li><a href="eeenotes.php"><h2>Electrical And Electronics Engineering</h2></a><br></li>
<li><a href="mechanicalnotes.php"><h2>Mechanical Engineering</h2></a><br></li>
<li><a href="itnotes.php"><h2>Information Technology</h2></a><br></li>
<li><a href="civilnotes.php"><h2>Civil Engineering</h2></a><br></li>
<li><a href="metallurgynotes.php"><h2>Metallurgy</h2></a><br></li>
<li><a href="mechatronics.php"><h2>Mechatronics</h2></a><br></li>
</ul>
</div>

</body>
</html>