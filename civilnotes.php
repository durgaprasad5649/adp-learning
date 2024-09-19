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
	<center><h1 >CIVIL ENGINEERING</h1></center>
	<br><br>
<div id="notes">
	<div>
		<ul>
		<li><a href="data_structres.pdf">Surveying</a></li><br>
		<li><a href="data_structres.pdf">Strength of Metals</a></li><br>
		<li><a href="data_structres.pdf">Theory of Structures</a></li><br>
		<li><a href="data_structres.pdf">Mechanics of Material</a></li><br>
		<li><a href="data_structres.pdf">Steel Structures</a></li><br>
		<li><a href="data_structres.pdf">Design of Reinforced Concrete</a></li><br>
		<li><a href="data_structres.pdf">Water Resources Engineering</a></li><br>
		</ul>
	</div>
	<div>
		<ul>
		<li><a href="data_structres.pdf">Strucutural Analysis</a></li><br>
		<li><a href="data_structres.pdf">Advanced Surveying</a></li><br>
		<li><a href="data_structres.pdf">Concrete Technology</a></li><br>
		<li><a href="data_structres.pdf">Transportation Engineering</a></li><br>
		<li><a href="data_structres.pdf"> Engineering Mechanics</a></li><br>
		<li><a href="data_structres.pdf">Fluid Mechanics</a></li><br>
		<li><a href="data_structres.pdf">Construction engg Management</a></li><br>
		</ul>
	</div>
</div>