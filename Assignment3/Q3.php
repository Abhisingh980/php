<!---A web application that takes name and age from an HTML page. If the age is less
than 18, it should send a page with “Hello <name>, you are not authorized to visit
this site” message, where <name> should be replaced with the entered name.
Otherwise it should send “Welcome <name> to this site” message.-->
<?php
$name=$_POST['name'];
$age=$_POST['age'];
if($age<18)
{
echo "<h1>Hello' $name, 'you are not authorized to visit this site</h1>";
}
else
{
echo "<h1>Welcome' $name 'to this site</h1>";
}
?>