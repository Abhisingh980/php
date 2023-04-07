
<?php
// Get the values from the form
$First_Number=$_POST['fnumber'];
$Second_Number=$_POST['snumber'];
$Operator=$_POST['operator'];
// Perform the operation
switch($Operator)
{
case "+":
$Result=$First_Number+$Second_Number;
break;
case "-":
$Result=$First_Number-$Second_Number;
break;
case "*":
$Result=$First_Number*$Second_Number;
break;
case "/":
$Result=$First_Number/$Second_Number;
break;
case "%":
$Result=$First_Number%$Second_Number;
break;
}
// Display the result
echo "<h1>The result of $First_Number $Operator $Second_Number is $Result</h1>";
?>