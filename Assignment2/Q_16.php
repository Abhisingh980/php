<!--Write a PHP script to find the maximum and minimum marks from the following set
of arrays.
Sample arrays :
$marks1 = array(360,310,310,330,313,375,456,111,256);
$marks2 = array(350,340,356,330,321);
$marks3 = array(630,340,570,635,434,255,298);
Expected Output :
Maximum marks : 635
Minimum marks : 111-->
<?php
$marks1 = array(360,310,310,330,313,375,456,111,256);
$marks2 = array(350,340,356,330,321);
$marks3 = array(630,340,570,635,434,255,298);
$marks = array_merge($marks1, $marks2, $marks3);
echo "Maximum marks : ", max($marks),"<br>","<br>";
echo "Minimum marks : ", min($marks);
?>
