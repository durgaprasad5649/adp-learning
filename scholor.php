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
		
	#linkx
{
margin-left:20px;
}
	

body
	{
	margin:0px;
	background-color:white;
	}
	h1
	{
	margin-left:10px;
	}
	h3
	{
	margin-left:10px;
	}
	p
	{
	margin-left:10px;
	}
	a{
font-size:18px;}
a:hover
    {            
     color:#4974e9;
     cursor:pointer;
	 transform:scale(1.2);
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
			<a href="s_material.php" class="btn1">Study Materials</a>
			</div>
		 
			<div>
				<a href="lectures.php" class="btn1">Lectures</a>
				</div>
				<div>
				 <a href="internship.php" class="btn1">Internship</a>
				 </div>
				 <div>
					 <a href="" class="btn1">Scholorship</a>
					 </div>
					 <div>
						 <a href="successstory.php" class="btn1">Success Story</a>
						 </div>
			</div>
		<div>
		<div id="scholor">
		<h1>Scholorship</h1>
		<p>
		A scholarship is a form of financial aid awarded to students. Generally, scholarships are awarded based on a set of criteria such as academic merit, diversity and inclusion, athletic skill, and financial need
		</p>
		<h3>Click the below links </h3>
		</div>
		<div id="linkx">
		<ul><li><a href="https://www.buddy4study.com/article/scholarships-for-engineering-students">link 1</a></li></ul>
		<ul><li><a href="https://collegedunia.com/courses/bachelor-of-technology-btech/scholarship-for-btech-students-in-india">link 2</a></li></ul>
		<ul><li><a href="https://www.hindustantimes.com/education/scholarship-btech">link 3</a></li></ul>
		<ul><li><a href="https://testbook.com/scholarships/btech-scholarship">link 4</a></li></ul>
		<ul><li><a href="https://www.vidhyaa.in/blog/scholarship-for-btech-students">link 5</a></li></ul>
		<ul><li><a href="https://leverageedu.com/blog/scholarship-for-btech-students/">link 6</a></li></ul>
		<ul><li><a href="https://scholarships.gov.in/fresh/schemeEligibiltyPage">link 7</a></li></ul>
		</div>
	</div>
</body>
</html>