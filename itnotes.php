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
	<center><h1 >INFORMATIONAL TECHNOLOGY AND ENGINEERING</h1></center>
	<br><br>
	<div id="notes">
	<div>
		<ul>
		<li><a href="data_structres.pdf">Data Strucutres</a></li><br>
		<li><a href="data_structres.pdf">Software engineering</a></li><br>
		<li><a href="data_structres.pdf">Information security</a></li><br>
		<li><a href="data_structres.pdf">Data base management system</a></li><br>
		<li><a href="data_structres.pdf">computer architecture </a></li><br>
		<li><a href="data_structres.pdf">operating sysytems </a></li><br>
		<li><a href="data_structres.pdf">Computer networks</a></li><br>
		</ul>
	</div>
	<div>
		<ul>
		<li><a href="data_structres.pdf">Information System</a></li><br>
		<li><a href="data_structres.pdf">Artificial intelligence </a></li><br>
		<li><a href="data_structres.pdf">Computer graphics</a></li><br>
		<li><a href="data_structres.pdf">computing</a></li><br>
		<li><a href="data_structres.pdf">electronic Engineering</a></li><br>
		<li><a href="data_structres.pdf">Data management</a></li><br>
		<li><a href="data_structres.pdf">Web Technologies</a></li><br>
		</ul>
	</div>
</div>
</body>
</html>