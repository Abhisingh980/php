<?php
$link=mysqli_connect("localhost","root","");
if($link===false)
{
die("ERROR:could not connect.".mysqli_connect_error());
}
$sql="CREATE DATABASE demo";
if(mysqli_query($link,$sql))
{
echo "database created successfully";
}
else
{
echo "ERROR:could not able to execute $sql.".mysqli_error($link);
}
mysqli_close($link);
?>