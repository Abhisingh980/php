<?php
$link=mysqli_connect("localhost","root","","demo");
if($link===false)
{
die("ERROR:could not connect.".mysqli_connect_error());
}
$sql="CREATE TABLE persons(person_id INT(4) PRIMARY KEY AUTO_INCREMENT,
first_name VARCHAR(30) NOT NULL,last_name VARCHAR(30) NOT NULL,email_address VARCHAR(50))";
if(mysqli_query($link,$sql))
{   
echo "Table Person created successfully";
}
else
{
echo "ERROR:could not able to execute $sql.".mysqli_error($link);
}
mysqli_close($link);
?>