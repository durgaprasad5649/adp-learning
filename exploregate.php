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
	body
	{
	margin:0px;
	background-color:white;
	}
	#block1
{
	
	display:grid;
	grid-template-columns:33% 33% 33%;
}
	.cal{
height:200px;
width:80%;
    background: #afd3bc;
    padding:30px;
    border-radius: 20px;
	border-color:#8ec1a0;
	
}
.cal:hover
{
 transform:scale(1.1); 
}
.caltext
{
font-size:20px;
	font-weight:bold;
	text-decoration: none;
}
p
{
margin-left:10px;
}
h1
{
margin-left:10px;

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
					 <a href="scholor.php" class="btn1">Scholorship</a>
					 </div>
					 <div>
						 <a href="successstory.php" class="btn1">Success Story</a>
						 </div>
			</div>
		
		 <section>
		 <br>
		 <h1><u>GATE :</u></h1>
<p>The Graduate Aptitude Test in Engineering (GATE) is an examination that primarily tests the comprehensive understanding of various undergraduate subjects in engineering and science for admission into the Masters Program and Recruitment by some Public Sector Companies. GATE Examination is conducted jointly by the seven Indian Institutes of Technology at Mumbai, Delhi, Guwahati, Kanpur, Kharagpur, Chennai, Roorkee & Indian Institute of Science at Bengaluru on behalf of the National Coordination Board – GATE, The Department of Higher Education, Ministry of Education (MoE), Government of India.
</p><br><br><br>
<div id="block1">
		 <div>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="cal" >
		<a class="caltext" href="https://en.wikipedia.org/wiki/Graduate_Aptitude_Test_in_Engineering">
		Know about GATE
		</a>
		</button>
		</div>
		<div>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="cal" >
		<a class="caltext" href="https://gate.iitkgp.ac.in/gate2022/gate_syllabus.html">
		Syllabus
		</a>
		</button>
		</div>
		<div>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="cal" >
		<a class="caltext" href="https://gate.iitkgp.ac.in/old_question_papers.html">
		Old Question Papers
		</a>
		</button>
		</div>
</div>
		 <br><br>
<div id="block1">
		 <div>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="cal" >
		<a class="caltext" href="https://gate.iitkgp.ac.in/gate2022/question_pattern.html">
		Question pattern
		</a>
		</button>
		</div>
		<div>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="cal" >
		<a class="caltext" href="https://www.youtube.com/@GATEWallahbyPW">
		Lectures
		</a>
		</button>
		</div>
		<div>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="cal" >
		<a class="caltext" href="https://testbook.com/gate/study-notes">
		study materials
		</a>
		</button>
		</div>
</div>
<br><br><Br>
</body>

</html>