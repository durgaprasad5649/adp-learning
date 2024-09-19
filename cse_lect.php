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
		<li><a href="https://www.youtube.com/watch?v=xLetJpcjHS0&list=PLBlnK6fEyqRj9lld8sWIUNwlKfdUoPd1Y">Data Strucutres</a></li><br>
		<li><a href="https://www.youtube.com/watch?v=JFF2vJaN0Cw&list=PLxCzCOWd7aiGFBD2-2joCpWOLUrDLvVV_">Computer Networks</a></li><br>
		<li><a href="https://www.youtube.com/watch?v=bkSWJJZNgf8&list=PLxCzCOWd7aiGz9donHRrE9I3Mwn6XdP8p">Operating System</a></li><br>
		<li><a href="https://www.youtube.com/watch?v=0IAPZzGSbME&list=PLDN4rrl48XKpZkf03iYFl-O29szjTrs_O">Algorithms</a></li><br>
		<li><a href="https://www.youtube.com/watch?v=wGLTV8MgLlA&list=PLU6SqdYcYsfJ27O0dvuMwafS3X8CecqUg">Descrete Mathematics</a></li><br>
		<li><a href="https://www.youtube.com/watch?v=EjavYOFoJJ0&list=PLdo5W4Nhv31a8UcMN9-35ghv8qyFWD9_S">Programming in C</a></li><br>
		<li><a href="https://www.youtube.com/watch?v=A74TOX803D0">Java Programming</a></li><br>
		</ul>
	</div>
	<div>
		<ul>
		<li><a href="https://www.youtube.com/watch?v=kBdlM6hNDAE&list=PLxCzCOWd7aiFAN6I8CuViBuCdJgiOkT2Y">Data Base Management System</a></li><br>
		<li><a href="https://www.youtube.com/watch?v=k14RgZzF0I0&list=PLR4Rlu17MDY7G48nE7w8vNdygy4CX0Sev">Theory Of Computation</a></li><br>
		<li><a href="https://www.youtube.com/watch?v=L9X7XXfHYdU&list=PLxCzCOWd7aiHMonh3G6QNKq53C6oNXGrX">Computer Architecture</a></li><br>
		<li><a href="https://www.youtube.com/watch?v=BSVKUk58K6U&list=PL9gnSGHSqcno1G3XjUbwzXHL8_EttOuKk">Object Oriented Programming</a></li><br>
		<li><a href="https://www.youtube.com/watch?v=8jH07r6135o&list=PL_pbwdIyffslgxMVyXhnHiSn_EWTvx1G-">Software Engineering</a></li><br>
		<li><a href="https://www.youtube.com/watch?v=7wnove7K-ZQ&list=PLu0W_9lII9agwh1XjRt242xIpHhPT2llg">Python Programming</a></li><br>
		<li><a href="https://www.youtube.com/watch?v=UBO5aQYLUPA&list=PLROvODCYkEM9Hq-wXWDO3cUJ_FDB1hDK6">Information Security</a></li><br>
		</ul>
	</div>
</div>
</body>
</html>