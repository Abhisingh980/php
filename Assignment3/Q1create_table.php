<?php
$link=mysqli_connect("localhost","root","","demo");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
// Create table
//$sql="CREATE TABLE Faculty(FirstName varchar(15),LastName varchar(15),Title varchar(20),
//Email varchar(30),Office varchar(15),Telephone_Extension varchar(10))";
$sql="CREATE TABLE Login_detail(FullName varchar(30),login_name varchar(30) Primary key,Pass varchar(30))";
// Execute query
if (mysqli_query($link,$sql))
{
echo "Table Faculty created successfully";
}
else
{
echo "Error creating table: " . mysqli_error($link);
}
// Close connection
mysqli_close($link);
?>