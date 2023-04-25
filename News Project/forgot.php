<?php
$link=mysqli_connect("localhost","root","","demo");
if($link===false){
    die("ERROR: Could not connect. " . mysqli_connect_error());   
}
$name=$_POST["email"];
$pass=$_POST["npass"];
$Rpass=$_POST["Rpass"];
if($name=="" || $pass=="" || $Rpass=="")
{
   header("location:forgotPassword.html");
}else if($pass!=$Rpass)
{
    header("location:forgotPassword.html");
}
else if(strlen($pass)<5)
{ 
        header("location:forgotPassword.html");
}else
{
    $sql="UPDATE `Login_detail` SET `Pass`='$pass' WHERE `login_name`='$name'";
    if(mysqli_query($link,$sql))
    {
        header("location:login.html");
    }
    else
    {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
}
mysqli_close($link);
?>