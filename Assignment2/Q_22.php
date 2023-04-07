<!DOCTYPE html>
<html lang="en">
<head>
    <title>AmountEarned</title>
    <link rel="stylesheet" href="Q_22.css">
</head>
<body>
    <h1>Program3</h1>
    <form action="GetPay.php" method="post">
        <fieldset>
        <legend>Pay Period Ending</legend>
        <label for="month">month</label>
        <input type="text" name="month" id="month">
        <label for="day">day</label>
        <input type="number" name="day" id="day">
        <label for="year">year</label>
        <input type="number" name="year" id="year"><span style="color:red;">*Required</span>
        </fieldset><br>
        <fieldset>
            <legend>Hours worked and pay rate</legend>
            <label for="hours">hours</label>
            <input type="number" name="hours" id="hours"><span style="color:red;">*Required</span><br>
            <label for="pay">pay</label>
            <input type="text" name="pay" id="pay"><span style="color:red;">*Required</span><br>
             </fieldset><br>
            <center><input type="submit" value="submit"></center>   
    </form>
</body>
</html>