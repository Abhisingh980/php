<?php
$link=mysqli_connect("localhost","root","","demo");
if($link===false)
{
die("ERROR: Could not connect. " . mysqli_connect_error());
}
$name=$_POST["name"];
$pass=$_POST["password"];
$user_name=$_POST["uname"];
$sql="INSERT INTO Login_detail VALUES('$name','$user_name','$pass')";
if(mysqli_query($link,$sql))
{
echo "New record created successfully go to login page";
}
else
{
echo "Error: " . $sql . "<br>" . mysqli_error($link);
}
mysqli_close($link);
?>