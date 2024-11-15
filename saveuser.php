<<<<<<< HEAD
<?php
$username=$_REQUEST['name'];
$useremail=$_REQUEST['email'];
$password=$_REQUEST['passkey'];
$cpassword=$_REQUEST['cpasskey'];
$uphone=$_REQUEST['phone'];
$uaddress=$_REQUEST['address'];
$ubranch=$_REQUEST['branch'];
$ucla=$_REQUEST['cla'];
$con=mysqli_connect('localhost','root','');
$db=mysqli_select_db($con,'durgaprasad') or die(mysqli_error());
if($username!=""&& $useremail!="" && $password!="" && $cpassword!="" && $uphone!==""&& $uaddress!="" && $ubranch!="" && $ucla!="" && $password==$cpassword)
{
    $query=mysqli_query($con,"select * from saveuser ");
    $write=mysqli_query($con,"insert into saveuser (name,email,passkey,cpasskey,phone,address,branch,cla) values ('$username' ,'$useremail' ,'$password','$cpassword','$uphone', '$uaddress','$ubranch','$ucla')");
    echo "<script>alert('sign up completed');
    window.location.href='login.html';</script>";
   exit();
}
else
{
    echo  "<script>
    window.location.href='signup.html';</script>";
    exit();
}
=======
<?php
$username=$_REQUEST['name'];
$useremail=$_REQUEST['email'];
$password=$_REQUEST['passkey'];
$cpassword=$_REQUEST['cpasskey'];
$uphone=$_REQUEST['phone'];
$uaddress=$_REQUEST['address'];
$ubranch=$_REQUEST['branch'];
$ucla=$_REQUEST['cla'];
$con=mysqli_connect('localhost','root','');
$db=mysqli_select_db($con,'durgaprasad') or die(mysqli_error());
if($username!=""&& $useremail!="" && $password!="" && $cpassword!="" && $uphone!==""&& $uaddress!="" && $ubranch!="" && $ucla!="" && $password==$cpassword)
{
    $query=mysqli_query($con,"select * from saveuser ");
    $write=mysqli_query($con,"insert into saveuser (name,email,passkey,cpasskey,phone,address,branch,cla) values ('$username' ,'$useremail' ,'$password','$cpassword','$uphone', '$uaddress','$ubranch','$ucla')");
    echo "<script>alert('sign up completed');
    window.location.href='login.html';</script>";
   exit();
}
else
{
    echo  "<script>
    window.location.href='signup.html';</script>";
    exit();
}
>>>>>>> a36f62a (Added styles folder)
?>