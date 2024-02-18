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
	h1
	{
	margin-left:10px;
	}p
	{
	margin-left:10px;
	}
	a
	{
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

		<h1>International English Language Testing System</h1>
		<p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The International English Language Testing System is an international standardized test of English language proficiency for non-native English language speakers. It is jointly managed by the British Council, IDP: IELTS Australia and Cambridge Assessment English, and was established in 1989. IELTS is one of the major English-language tests in the world. There are two modules and an additional test.

IELTS is accepted by most Australian, British, Canadian, European, Irish and New Zealand academic institutions, by over 3,000 academic institutions in the United States, and by various professional organisations across the world.</p>
<br>
<ul>
<li><a href="https://www.ieltsidpindia.com/information/how-to-register?gad_source=1&gclid=CjwKCAiA98WrBhAYEiwA2WvhOn53H4XZbuG1I-44_rThurcVoDmlWPNswh5VrMmWE3K668oSQSzaUhoCmyUQAvD_BwE">How to register</a></li><br>
<li><a href="https://ielts.org/take-a-test">Take a test</a></li><br>
<li><a href="https://ielts.org/take-a-test/test-types">Test Types</a></li><br>
<li><a href="https://ielts.org/take-a-test/preparation-resources/sample-test-questions">Sample Test Questions</a></li><br>
<li><a href="https://ielts.org/take-a-test/why-choose-ielts">Why Choose IELTS</a></li><br>
<li><a href="https://ielts.org/take-a-test/why-choose-ielts">Book IELTS</a></li><br>
<li><a href="https://ielts.org/take-a-test/preparation-resources">Preparation Resources</a></li><br>
</ul>
</body>
</html>