<!--the server checks these values against the data from a
database and takes the following decisions.
If name and password matches, serves a welcome page with user's full name.-->
<?php
$link=mysqli_connect("localhost","root","","demo");
if($link===false)
{
die("ERROR: Could not connect. " . mysqli_connect_error());
}
session_start(){
//$name=$_POST["name"];
//$pass=$_POST["password"];
$name=$_SESSION["name"];
$pass=$_SESSION["password"];
}
$sql="SELECT * FROM Login_detail WHERE login_name='$name' AND Pass='$pass'";
$result=mysqli_query($link,$sql);
if(mysqli_num_rows($result)>0)
{
echo "Welcome $name";
}
else
{
echo "<h1>Invalid username or password</h1><br><br>";
//link to login page
echo "<a href='Q7.html'>Login Page</a>";
session_abort();
}
mysqli_close($link);
?>