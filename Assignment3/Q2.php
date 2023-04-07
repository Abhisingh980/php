<!--Write a PHP program to display data from the database in a table format.
(Assume following table is in database)-->
<!DOCTYPE html>
<html>
<head>
<title>Q2</title>
</head>
<body>
<?php
$link=mysqli_connect("localhost","root","","demo");
if($link===false)
{
die("ERROR: Could not connect. " . mysqli_connect_error());
}
$sql="SELECT * FROM persons";
if($result=mysqli_query($link,$sql))
{
if(mysqli_num_rows($result)>0)
{   
echo "<table border='1'>";
echo "<tr>";
echo "<th>Person_ID</th>";
echo "<th>First_Name</th>";
echo "<th>Last_Name</th>";
echo "<th>Email</th>";
echo "</tr>";
while($row=mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['person_id'] . "</td>";
echo "<td>" . $row['first_name'] . "</td>";
echo "<td>" . $row['last_name'] . "</td>";
echo "<td>" . $row['email_address'] . "</td>";
echo "</tr>";
}
echo "</table>";
mysqli_free_result($result);
}
else
{
echo "No records matching your query were found.";
}
}
else
{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
mysqli_close($link);
?>
</body>
</html>