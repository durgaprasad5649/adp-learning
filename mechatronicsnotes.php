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
		<div><form action="s_material.php" method="post">
		<input type="submit" class="btn1" value="&nbsp;&nbsp;Study Materials"></form>
		</div>

		<div><form action="lectures.php" method="post">
		<input type="submit" class="btn1" value="&nbsp;&nbsp;Lectures"></form>
		</div>
		<div><form action="internship.php" method="post">
		<input type="submit" class="btn1" value="&nbsp;&nbsp;Internship"></form>
		</div>
		<div><form action="scholor.php" method="post">
		<input type="submit" class="btn1" value="&nbsp;&nbsp;Scholarships"></form>
		</div>
		<div><form action="successstory.php" method="post">
		<input type="submit" class="btn1" value="&nbsp;&nbsp;Success Stories"></form>
		</div>
		</div>
		<br>
		<br>
	<center><h1 >MECHATRONICS ENGINEERING</h1></center>
	<br><br>
<div id="notes">
	<div>
		<ul>
		<li><a href="data_structres.pdf">Data Strucutres</a></li><br>
		<li><a href="data_structres.pdf">Computer Networks</a></li><br>
		<li><a href="data_structres.pdf">Operating System</a></li><br>
		<li><a href="data_structres.pdf">Algorithms</a></li><br>
		<li><a href="data_structres.pdf">Descrete Mathematics</a></li><br>
		<li><a href="data_structres.pdf">Programming in C</a></li><br>
		<li><a href="data_structres.pdf">Java Programming</a></li><br>
		</ul>
	</div>
	<div>
		<ul>
		<li><a href="data_structres.pdf">Data Base Management System</a></li><br>
		<li><a href="data_structres.pdf">Theory Of Computation</a></li><br>
		<li><a href="data_structres.pdf">Computer Architecture</a></li><br>
		<li><a href="data_structres.pdf">Object Oriented Programming</a></li><br>
		<li><a href="data_structres.pdf">Software Engineering</a></li><br>
		<li><a href="data_structres.pdf">Python Programming</a></li><br>
		<li><a href="data_structres.pdf">Web Technologies</a></li><br>
		</ul>
	</div>
</div>
</body>
</html>