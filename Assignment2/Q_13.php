<!--Write a PHP script to convert a date from yyyy-mm-dd to dd-mm-yyyy.
Sample date: 2012-09-12
Expected Result: 12-09-2012-->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Date</title>
    <link rel="stylesheet" href="Q_13.css">
</head>
<body>
    <h1>Convert Date</h1>
    <form action="Q_13.php" method="Post">
        <label for="date">Date</label>
        <input type="text" name="date" id="date" placeholder="0000-00-00"><br><br>
        <center><input type="submit" value="submit"></center>
    </form>
  <?php
$date = $_POST['date'];
$parts = explode('-', $date);
echo "<h1>$parts[2]-$parts[1]-$parts[0]</h1>";
?>  
</body>
</html>
