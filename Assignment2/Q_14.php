<!--Write a PHP script to
a) Transform a string all uppercase letters.
b) Transform a string all lowercase letters.
c) Make a string's first character uppercase.
d) Make a string's first character of all the words uppercase.-->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>String</title>
    <link rel="stylesheet" href="Q_14.css">
</head>
<body>
    <h1>String</h1>
    <form action="Q_14.php" method="Post">
        <label for="string">String</label>
        <input type="text" name="string" id="string" placeholder="Enter String"><br><br>
        <center><input type="submit" value="submit"></center>
    </form>
<?php
$str = $_POST['string'];
echo strtoupper($str);
echo "<br>";
echo strtolower($str);
echo "<br>";
echo ucfirst($str);
echo "<br>";
echo ucwords($str);
?>
</body>
</html>
