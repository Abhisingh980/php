<!---Write a program to get the username & password from user. If the given username
is "admin" and password is "godsgift" show the welcome message otherwise show
the error and redirect to login page.-->
<?php
echo "<h3>Login Form</h3>";
if(isset($_POST['uname']) && isset($_POST['pass']))
{
$username = $_POST['uname'];
$password = $_POST['pass'];
if($username == "admin" && $password == "godsgift")
{
echo "<br><br><h1>Welcome $username</h1><br>";
}
else
{ 
    echo "<br><br>Invalid username or password  ! error<br>";  
    echo "<br><br>Redirecting to login page<br>";
    header("Location: Q_21.html");
}
}