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
	<center><h1 >COMPUTER SCIENCE AND ENGINEERING</h1></center>
	<br><br>
<div id="notes">
	<div>
		<ul>
		<li><a href="https://www.geeksforgeeks.org/data-structures/">Data Strucutres</a></li><br>
		<li><a href="https://www.geeksforgeeks.org/basics-computer-networking/">Computer Networks</a></li><br>
		<li><a href="https://www.geeksforgeeks.org/operating-systems/">Operating System</a></li><br>
		<li><a href="https://www.geeksforgeeks.org/fundamentals-of-algorithms/?ref=lbp">Algorithms</a></li><br>
		<li><a href="https://www.geeksforgeeks.org/discrete-mathematics-tutorial/?ref=lbp">Descrete Mathematics</a></li><br>
		<li><a href="https://www.geeksforgeeks.org/c-programming-language/">Programming in C</a></li><br>
		<li><a href="https://www.geeksforgeeks.org/java/">Java Programming</a></li><br>
		</ul>
	</div>
	<div>
		<ul>
		<li><a href="https://www.geeksforgeeks.org/dbms/">Data Base Management System</a></li><br>
		<li><a href="https://www.geeksforgeeks.org/theory-of-computation-automata-tutorials/?ref=lbp">Theory Of Computation</a></li><br>
		<li><a href="https://www.geeksforgeeks.org/computer-organization-and-architecture-tutorials/">Computer Architecture</a></li><br>
		<li><a href="https://www.geeksforgeeks.org/introduction-of-object-oriented-programming/">Object Oriented Programming</a></li><br>
		<li><a href="dhttps://www.geeksforgeeks.org/software-engineering/">Software Engineering</a></li><br>
		<li><a href="https://www.w3schools.com/python/default.asp">Python Programming</a></li><br>
		<li><a href="https://www.geeksforgeeks.org/what-is-data-encryption/">Information security</a></li><br>
		</ul>
	</div>
</div>