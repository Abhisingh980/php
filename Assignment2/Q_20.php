<!--Create a Registration form using HTML and retrieve 
the details from form using
$_POST[ ] and display all details.-->
<!DOCTYPE html>
<html>
<head>
<title>Registration Form</title>
<style>
body {
background-color: lightblue;
}   
h1 {
color: white;
text-align: center;
}
form {
border: 3px solid #f1f1f1;
font-family: Arial, Helvetica, sans-serif;
font-size: 20px;
}
input[type=text], input[type=password],input[type=email],input[type=number] {
width: 50%;
padding: 8px;
margin: 8px 0;
font-size:20px;
display: inline-block;
border: 1px solid #ccc;
box-sizing: border-box;
}
button {
background-color: #4CAF50;
color: white;
padding: 14px 20px;
margin: 8px 0;
border: none;
cursor: pointer;    
width: 100%;
}
button:hover {
opacity: 0.8;
}
.cancelbtn {
width: auto;
padding: 10px 18px;
background-color: #f44336;
}
input[type=submit] {
padding-left: 30px;
width: 30%;
background-color: #4CAF50;
color: white;
padding: 14px 20px;
margin: 8px 0;
border: none;
cursor: pointer;
}
</style>
</head>
<body>
<h1>Registration Form</h1>
<form action="Q_20.php" method="post">
First Name: &emsp;&emsp;&emsp;&emsp;<input type="text" name="fname" required><br>
Last Name: &emsp;&emsp;&emsp;&emsp;<input type="text" name="lname" required><br>
Email:&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;<input type="email" name="email" required><br>
Password: &emsp;&emsp;&emsp;&emsp;<input type="password" name="password" required><br>
confirm_password: <input type="password" name="confirm_password" required><br>
Phone number:&emsp;&emsp;<input type="number" name="phone" required><br>
Address : &emsp;&emsp;&emsp;&emsp;<input type="text" name="address" required><br>
<input type="submit" value="Submit">
</form>
<?php
if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirm_password']))
{
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$phone=$_POST['phone'];
$address=$_POST['address'];
echo "<br>","First Name: $fname","<br>";
echo "Last Name: $lname","<br>";
echo "Email: $email","<br>";
echo "Password: $password","<br>";
echo "Confirm Password: $confirm_password","<br>";
echo "Phone number: $phone","<br>";
echo "Address: $address","<br>";
}
?>
</body>
</html>

