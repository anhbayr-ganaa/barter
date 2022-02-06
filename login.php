
<?php
session_start();
error_reporting(0);
include("config.php");
if(isset($_POST['submit']))
{
$ret=mysqli_query($conn,"SELECT * FROM user WHERE userNumber='".$_POST['usernumber']."' and userPassword='".$_POST['userpassword']."'");
$num=mysqli_fetch_array($ret);
if($num>0)
{
$extra="include/navbar.php";
$_SESSION['login']=$_POST['usernumber'];
$_SESSION['id']=$num['userId'];
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
else
{
  $_SESSION['errmsg']="Invalid username or password";
$extra="login.php";
$host  = $_SERVER['HTTP_HOST'];
$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Нэвтрэх</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
<div class="loginContainer">
    <div class="imgContainer">
        <img src="images/1.jpg" alt="" class="banner">
    </div>
  
<form action="" class="input1" method="post">

    <div >

     <div>
         <p class="loginhead">Нэвтрэх</p>
       
        <div class="input2">  
            <p class=" tailbar  padd5">Нэвтрэхийн  тулд утасны дугаар, нууц үг оруулна уу</p>
          
            <div class="padd20">
                 <p class="title">Утасны дугаар</p>
                 <input type="text" class="myinput" name="usernumber" required>
             </div>
            <div class="padd20">
                <p class="title">Нууц үг</p>
                <input type="text" class="myinput" name="userpassword" required>
                <a href="" class="forgetpass">Нууц үг мартсан</a>
            </div>
            <div class="padd20"><button class="mybtn padd10" name="submit">Нэвтрэх</button></div>
        <div >
            <p class="padd5 or">эсвэл</p>
            <div class="padd20 or"><button class=" mybtn padd10 long other " onclick="location.href='register.html'"  >Бүртгүүлэх</button></div>
        </div>


        </div>
    </div>
    </div>

</form>
  




</div>

</body>
</html>