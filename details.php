<<<<<<< HEAD
<?php
session_start(); 
?>
<html>
    <head>
    <link rel="stylesheet" href="styles/style3.css">
    </head>
    <body>
    
        <div class="mid">
            <center><h1><b><u>USER DETAILS</u></b></h1></center>
       <b><p> Name : </b><?php
echo $_SESSION['unm'];
?>
<br>
<br>
<b>Email ID : </b>
<?php
echo $_SESSION['uid'];
?><br><br>
<b>Phone number :</b>
<?php
echo $_SESSION['ph'];
?><br><br>
<b>Branch :</b>
<?php
echo $_SESSION['b'];
?><br><br>
<b>Semester : </b>
<?php
echo $_SESSION['s'];
?><br><br>
<b>Address : </b>
<?php
echo $_SESSION['ad'];
?><br></p>
  <br>  <br>
<a href="index.html">  <center style=" font-size: 22px;"><b>Logout</b></center> </a>
</div>
       <br>

            </body>
            </html>

=======
<?php
session_start(); 
?>
<html>
    <head>
    <link rel="stylesheet" href="styles/style3.css">
    </head>
    <body>
    
        <div class="mid">
            <center><h1><b><u>USER DETAILS</u></b></h1></center>
       <b><p> Name : </b><?php
echo $_SESSION['unm'];
?>
<br>
<br>
<b>Email ID : </b>
<?php
echo $_SESSION['uid'];
?><br><br>
<b>Phone number :</b>
<?php
echo $_SESSION['ph'];
?><br><br>
<b>Branch :</b>
<?php
echo $_SESSION['b'];
?><br><br>
<b>Semester : </b>
<?php
echo $_SESSION['s'];
?><br><br>
<b>Address : </b>
<?php
echo $_SESSION['ad'];
?><br></p>
  <br>  <br>
<a href="index.html">  <center style=" font-size: 22px;"><b>Logout</b></center> </a>
</div>
       <br>

            </body>
            </html>

>>>>>>> a36f62a (Added styles folder)
