<?php
$useremail=$_REQUEST['email'];
$password=$_REQUEST['passkey'];	
$con=mysqli_connect('localhost','root','');
$db=mysqli_select_db($con,'durgaprasad') or die(mysqli_error());
$query=mysqli_query($con,"select * from saveuser where email='$useremail' and passkey='$password'");
$numrows=mysqli_num_rows($query);
if($numrows!=0)
{
while($row=mysqli_fetch_array($query))
{
$val=$row['email'];
$vas=$row['passkey'];
}
if($val==$useremail &&$vas==$password)
{
    echo "<script>alert('Login Successful');
    window.location.href='index0.html';
    </script>";
   exit();
}
}
else
{
    echo "<script>alert('Incorrect details');
     window.location.href='login.html';
     </script>";
    exit();
}
?>