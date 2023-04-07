<?php
$link=mysqli_connect("localhost","root","","demo");
if($link===false)
{
die("ERROR:could not connect.".mysqli_connect_error());
}
$sql="SELECT * FROM persons";
if($result=mysqli_query($link,$sql))
{
if(mysqli_num_rows($result)>0)
{
echo "<table>";
echo "<tr>";
echo "<th>first_name</th>";
echo "<th>last_name</th>";
echo "<th>email_address</th>";
echo "<th>mobile_number</th>";
echo "</tr>";
while($row=mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>".$row['first_name']."</td>";
echo "<td>".$row['last_name']."</td>";
echo "<td>".$row['email_address']."</td>";
echo "<td>".$row['mobile_number']."</td>";
echo "</tr>";
}
echo "</table>";
mysqli_free_result($result);
}
else
{
echo "no records matching your query were found.";
}
}
else
{
echo "ERROR:could not able to execute $sql.".mysqli_error($link);
}
mysqli_close($link);
?>