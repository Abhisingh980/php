
<?php
//connect to the database
$link=mysqli_connect("localhost","root","","demo");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$first_name = $_POST['fname'];
$last_name = $_POST['lname'];
$title = $_POST['title'];
$email = $_POST['email'];
$office = $_POST['office'];
$tel_extension = $_POST['extension'];
//check if all fields are filled in
if (!empty($first_name) && !empty($last_name) && !empty($title) && !empty($email) && !empty($office) && !empty($tel_extension))
{   
    //set data into database
    $sql="INSERT INTO faculty VALUES ('$first_name', '$last_name', '$title', '$email', '$office', '$tel_extension')";
    if (!mysqli_query($link,$sql))
    {
        die('Error: ' . mysqli_error($link));
    }
    echo "<h1>record added</h1>";
}
else
{
    echo "<h1 align:center;>Please fill in all fields before submitting the form !!!!!</h1><br>";
}
// Close connection
mysqli_close($link);
?>
