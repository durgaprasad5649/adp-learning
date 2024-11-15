<<<<<<< HEAD
<?php
session_start();
$useremail=$_REQUEST['email'];
$_SESSION['uid']=$useremail;
$password=$_REQUEST['passkey'];	
$con=mysqli_connect('localhost','root','');
$db=mysqli_select_db($con,'durgaprasad') or die(mysqli_error());
$query=mysqli_query($con,"select * from saveuser where email='$useremail' and passkey='$password'");
$numrows=mysqli_num_rows($query);
if($numrows!=0)
{
while($row=mysqli_fetch_array($query))
{
$nm=$row['name'];
$_SESSION['unm']=$nm;
$val=$row['email'];
$vas=$row['passkey'];
$bra=$row['branch'];
$sem=$row['cla'];
$_SESSION['s']=$sem;
$add=$row['address'];
$_SESSION['ad']=$add;
$pho=$row['phone'];
$_SESSION['ph']=$pho;


}

if($val==$useremail &&$vas==$password)
{
    $_SESSION['b']=$bra;
   
 
    echo "<script>alert('Login Successful');
    window.location.href='index0.php';
    
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
=======
<?php
session_start();
$useremail=$_REQUEST['email'];
$_SESSION['uid']=$useremail;
$password=$_REQUEST['passkey'];	
$con=mysqli_connect('localhost','root','');
$db=mysqli_select_db($con,'durgaprasad') or die(mysqli_error());
$query=mysqli_query($con,"select * from saveuser where email='$useremail' and passkey='$password'");
$numrows=mysqli_num_rows($query);
if($numrows!=0)
{
while($row=mysqli_fetch_array($query))
{
$nm=$row['name'];
$_SESSION['unm']=$nm;
$val=$row['email'];
$vas=$row['passkey'];
$bra=$row['branch'];
$sem=$row['cla'];
$_SESSION['s']=$sem;
$add=$row['address'];
$_SESSION['ad']=$add;
$pho=$row['phone'];
$_SESSION['ph']=$pho;


}

if($val==$useremail &&$vas==$password)
{
    $_SESSION['b']=$bra;
   
 
    echo "<script>alert('Login Successful');
    window.location.href='index0.php';
    
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
>>>>>>> a36f62a (Added styles folder)
?>