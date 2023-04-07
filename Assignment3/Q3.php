
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