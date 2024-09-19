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
	<center><h1 >ELECTRICAL AND ELECTRONICS ENGINEERING</h1></center>
	<br><br>
<div id="notes">
	<div>
		<ul>
		<li><a href="data_structres.pdf">Elecrtrical circuit analysis</a></li><br>
		<li><a href="data_structres.pdf">Elecrtrical machines</a></li><br>
		<li><a href="data_structres.pdf">Power systems</a></li><br>
		<li><a href="data_structres.pdf">Power electronics</a></li><br>
		<li><a href="data_structres.pdf">Analog and digital electronics</a></li><br>
		<li><a href="data_structres.pdf">Electrical instruments and instrumentation</a></li><br>
		<li><a href="data_structres.pdf">Electromagnetic fields</a></li><br>
		</ul>
	</div>
	<div>
		<ul>
		<li><a href="data_structres.pdf">Control Systems</a></li><br>
		<li><a href="data_structres.pdf">Micro processor and Micro Controllers</a></li><br>
		<li><a href="data_structres.pdf">Utilisation of electrical energy</a></li><br>
		<li><a href="data_structres.pdf">Wind and Solar Energy Systems</a></li><br>
		<li><a href="data_structres.pdf">Design of photo voltaic systems</a></li><br>
		<li><a href="data_structres.pdf">Power semiconductor drive</a></li><br>
		<li><a href="data_structres.pdf">Power system protection</a></li><br>
		</ul>
	</div>
</div>
</body>
</html>