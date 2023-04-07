<?php
$link=mysqli_connect("localhost","root","","demo");
if($link===false)
{
die("ERROR:could not connect.".mysqli_connect_error());
}
//$sql="update persons set mobile_number='4567896' where person_id=6";
$first_name=mysqli_real_escape_string($link,$_POST['fname']);
$last_name=mysqli_real_escape_string($link,$_POST['lname']);
$email_address=mysqli_real_escape_string($link,$_POST['email']);
$mobile_number=mysqli_real_escape_string($link,$_POST['mnumber']);
$sql="INSERT INTO persons(first_name,last_name,email_address,mobile_number)
        VALUES('$first_name','$last_name','$email_address','$mobile_number')";
if(mysqli_query($link,$sql))
{   
echo "record successfully inserted";
}
else
{
echo "ERROR:could not able to execute $sql.".mysqli_error($link);
}
mysqli_close($link);
?>