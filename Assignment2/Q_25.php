<!---Write a PHP program to generate and display the first n lines of a Floyd triangle.
(use n=5 and n=11 rows).
Sample output for n = 5 :
1
2 3
4 5 6
7 8 9 10
11 12 13 14 15-->
<!DOCTYPE html>
<html>
<head>
<title>Floyed triangle</title>
<link rel="stylesheet" href="Q_25.css"> 
</head>
<body>
    <h1>Floyed triangle</h1>
    <form action="Q_25.php" method="post">
        <label for="n">Enter the number of rows:</label>
        <input type="number" name="number" id="n"><br>
        <input type="submit" value="check">
    </form>
<?php
$n=$_POST['number'];
$number = 1;
for ($i = 1; $i <= $n; $i++) {
for ($j = 1; $j <= $i; $j++) {
echo $number . " ";
$number++;
}
echo "<br>";
}   
?>
</body>
</html>