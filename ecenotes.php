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
	<center><h1 >ELECTRONICS AND COMMUNICATION ENGINEERING</h1></center>
	<br><br>
<div id="notes">
	<div>
		<ul>
		<li><a href="data_structres.pdf">Basic electrical  engineering</a></li><br>
		<li><a href="data_structres.pdf">Digital electronics</a></li><br>
		<li><a href="data_structres.pdf">Analog electronics</a></li><br>
		<li><a href="data_structres.pdf">Signals & systems</a></li><br>
		<li><a href="data_structres.pdf">Electronic devices & circuits</a></li><br>
		<li><a href="data_structres.pdf">Control Systems</a></li><br>
		<li><a href="data_structres.pdf">Electromagnetics</a></li><br>
		</ul>
	</div>
	<div>
		<ul>
		<li><a href="data_structres.pdf">Analog & digital communication</a></li><br>
		<li><a href="data_structres.pdf">computer architecture</a></li><br>
		<li><a href="data_structres.pdf">VLSI engineering</a></li><br>
		<li><a href="data_structres.pdf">Numeric methods</a></li><br>
		<li><a href="data_structres.pdf">Computer networks</a></li><br>
		<li><a href="data_structres.pdf">Digital system design</a></li><br>
		<li><a href="data_structres.pdf">wired communication</a></li><br>
		</ul>
	</div>
</div>