<?php
$link=mysqli_connect("localhost","root","","demo");
if($link===false)
{
die("ERROR: Could not connect. " . mysqli_connect_error());
}
$name=$_POST["name"];
$pass=$_POST["password"];
$user_name=$_POST["email"];
$Rpass=$_POST["Rpassowrd"];
if($pass<5)
{
echo "<h1 style='color:red'>password must be more than 5 character</h1>";
}
else if($pass!=$Rpass)
{
echo "<h1 style='color:red'>password not match to retype password</h1>";
}else if($name==""||$pass==""||$user_name==""||$Rpass=="")
{
echo " <h1 style='color:red'> please fill all the field</h1>";
}
else
{
  $email="SELECT * from Login_detail where login_name='$user_name'";
 if($res=mysqli_query($link,$email))
    {
        if(mysqli_num_rows($res)>0){
        echo "<h1 style='color:red'>Email already exist please try another email</h1>";
        }
        else{
             $sql="INSERT INTO Login_detail VALUES('$name','$user_name','$pass','$Rpass')";
       if(mysqli_query($link,$sql))
           {
            //  echo '<h2>Registration successful</h2><br>';
            //     echo '<h1><a href="FrontPage.html">Click here to home</a></h1>';
            header("location:FrontPage.html");
           }else{
             echo "Error: " . $sql . "<br>" . mysqli_error($link);
            }
        }
    }
}
mysqli_close($link);
?>