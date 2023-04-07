<!--Write a PHP program that tests whether an e-mail address is input correctly. Verify
that the input begins with series of characters, followed by the @ character, another
series of characters, a period (.) and a final series of characters. Test your program,
using both valid and invalid email addresses.-->
<!DOCTYPE html>
<html>
<head>
<title>check email</title>
<link type="text/css" rel="stylesheet" href="Q_24.css">
</head>
<body>
    <h3>email validation</h3>
<form action="Q_24.php" method="post">
<label for="email">Enter email :</label>
<input type="mail" name="email">
<center><input type="submit" value="submit"></center>
</form>
<?php
if(isset($_POST['email']))
{
$email = $_POST['email'];
if(preg_match("/^[a-zA-Z0-9]+@[a-z]+\.[a-z]+$/", $email))
{
echo "<br><br><h1>Valid Email</h1><br>";
}
else
{
echo "<br><br><h1>Invalid Email</h1><br>";
}
}
?>
</body>
</html>