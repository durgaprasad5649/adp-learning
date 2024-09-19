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
	<center><h1 >METALLURGICAL ENGINEERING</h1></center>
	<br><br>
<div id="notes">
	<div>
		<ul>
		<li><a href="data_structres.pdf">Mechanics of fluid</a></li><br>
		<li><a href="data_structres.pdf">Metallurgical analysis</a></li><br>
		<li><a href="data_structres.pdf">physical Metallurgy</a></li><br>
		<li><a href="data_structres.pdf">Metallurgical thermodynamics</a></li><br>
		<li><a href="data_structres.pdf">Priniciples of Extractive metallurgy</a></li><br>
		<li><a href="data_structres.pdf">metal casting</a></li><br>
		<li><a href="data_structres.pdf">metal forming</a></li><br>
        <li><a href="data_structres.pdf">mechanics of solid </a></li><br>
        <li><a href="data_structres.pdf">heat treatment and phase transfor...</a></li><br>
        <li><a href="data_structres.pdf">metal joining</a></li><br>
        <li><a href="data_structres.pdf">non ferrous extractive metallurgy</a></li><br>
    </ul>
	</div>
	<div>
		<ul>
		<li><a href="data_structres.pdf">Steel making</a></li><br>
		<li><a href="data_structres.pdf">Material Characterization techniques</a></li><br>
		<li><a href="data_structres.pdf">principles of electronic Communication</a></li><br>
		<li><a href="data_structres.pdf">Nano materials</a></li><br>
		<li><a href="data_structres.pdf">fuels , furnaces & refractories</a></li><br>
		<li><a href="data_structres.pdf">mineral dressing</a></li><br>
		<li><a href="data_structres.pdf">thermodynamics and kinetics</a></li><br>
        <li><a href="data_structres.pdf">mechanical behaviour of metals</a></li><br>
        <li><a href="data_structres.pdf">iron production</a></li><br>
        <li><a href="data_structres.pdf">electro metallurgy and corrosion</a></li><br>
        <li><a href="data_structres.pdf">ceramics and composite material</a></li><br>
    </ul>
	</div>
</div>
</body>
</html>