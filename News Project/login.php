<?php
$link=mysqli_connect("localhost","root","","demo");
if($link===false)
{
die("ERROR: Could not connect. " . mysqli_connect_error());
}
$name=$_POST["name"];
$pass=$_POST["password"];
if($name==""||$pass=="")
{
echo "<h1 style='color:red'> please fill all the field</h1>";
}else{
$sql="SELECT * FROM Login_detail";
if($result=mysqli_query($link,$sql))
{
if(mysqli_num_rows($result)>0)
{
while($row=mysqli_fetch_array($result))
{
if($row['login_name']==$name && $row['Pass']==$pass)
{
    header("location:FrontPage.html");
}
}
}
else
{
echo "<h1>Invalid username or password</h1><br><br>";
}
}
}
mysqli_close($link);
?>