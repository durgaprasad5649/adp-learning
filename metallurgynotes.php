<?php
session_start();  
?>
<html>
<head>
<style>
#b1
	{
	height:70px;
	background-color:#8ec1a0;
	display: grid;
	grid-template-columns:50% 50% ;
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
	height: 60;
	background-color: #afd3bc;
	border-radius: 30px;
	margin-left: 5%;
	margin-top: 5px;
}
#b4
	{
	padding-top:10px;
	height:35px;
	background-color:#afd3bc;
	display:grid;
	grid-template-columns:20% 20% 20%  20% 20%;
	}
.btn1
	{
	margin-top:0px;
	background-color:#afd3bc;
	color:black;
	border:0px;
	font-size:20px;
	text-align:center;
	
	}
.btn1:hover
    {            
     color:#4974e9;
     cursor:pointer;
	 transform:scale(1.05);
    }
	#linkx
{
margin-left:20px;
}
	

body
	{
	margin:0px;
	background-color:white;
	}
	
#notes
{
	display:grid;
	grid-template-columns:45% 45%;
	margin-left:10%
}
a
{
font-size:20px;
}
a:hover
{
transform:scale(1.5);
color:#61c58e;
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
			   <<div><h1>
         <?php
    echo $_SESSION['uid'];
?></h1>
         </div>
			   <div id="b121"><img src="profile1.jpg" class="prof"></div>
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
		<input type="submit" class="btn1" value="&nbsp;&nbsp;Scholorships"></form>
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