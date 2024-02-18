<?php
session_start(); 
?>
<html>
    <head>
        <style>
               .mid 
               {
                   margin-left: 30%;
                   width:40%;
                   background-color:#afd3bc;
                   margin-top: 100px;
                   height: 360px;
                   border-radius: 20px;
                   padding: 10px;
               }
               p{
                margin-left: 20px;
                font-size: 22px;
               }
               .body
               {
                background-color: whitesmoke;
               }
        </style>
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
</div>
       
            </body>
            </html>

