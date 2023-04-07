<!DOCTYPE html>
<html lang="en">
<head>
    <title>GetPay</title>
    <link rel="stylesheet" href="GetPay.css">
</head>
<body>
    <h1>Get Pay</h1>
    <table border=1>
        <h2 value="<?php $month=$_POST['month'];$day=$_POST['day'];$year=$_POST['year']?>" >Earning for Pay Period Ending <?php echo $month," ",$day," , ",$year?></h2>
        <tr>
            <th>Hours Worked</th>
            <th>Pay Rate</th>
            <th>Amount Earned</th>
        </tr>        
        <tr>
            <td value="<?php $hour=$_POST['hours']?>"> <?php echo $hour; ?></td>
            <td value="<?php $rate=$_POST['pay']?>"> <?php echo $rate; ?></td>
            <td value="<?php $ho=$_POST['hours'];$rt=$_POST['pay']?>"> <?php echo $ho*$rt; ?></td>
        </tr>
    </table><br>
    <br>
    Return to : <a href="Q_22.php">Pay Period</a>
</body>
</html>