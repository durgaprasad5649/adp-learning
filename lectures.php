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
	text-decoration: none;
	margin-left: 30px;
	}
	.btn1:hover
    {            
     color:#4974e9;
     cursor:pointer;
	 transform:scale(1.05);
	 
    }
		
#smat
{
	margin-left: 20px;
}
body
	{
	margin:0px;
	background-color:white;
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
		<div><h1>
         <?php
    echo $_SESSION['uid'];
?></h1>
         </div>
			   <div id="b121"><img src="profile1.jpg" class="prof"></div>
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
					 <a href="scholor.php" class="btn1">Scholorship</a>
					 </div>
					 <div>
						 <a href="successstory.php" class="btn1">Success Story</a>
						 </div>
			</div>
		
		<br><br>	<center><h1> Choose Your Branch For Lectures </h1></center><br><br>
<div id="smat" >
<ul>
<li><a href="cse_lect.php" ><h2>Computer science and Engieering</h2></a><br></li>
<li><a href="ece_lect.php"><h2>Electronics and Communication Engineering</h2></a><br></li>
<li><a href="eee_lect.php"><h2>Electrical And Electronics Engineering</h2></a><br></li>
<li><a href="mechanical_lect.php"><h2>Mechanical Engineering</h2></a><br></li>
<li><a href="it_lect.php"><h2>Information Technology</h2></a><br></li>
<li><a href="civil_lect.php"><h2>Civil Engineering</h2></a><br></li>
<li><a href="metallurgy_lect.php"><h2>Metallurgy</h2></a><br></li>
<li><a href="mechatronics_lect.php"><h2>Mechatronics</h2></a><br></li>
</ul>
</div>

</body>
</html>