<!---Write PHP program to create session variables and display them.-->
<?php
session_start();
$_SESSION["name"] = "John";
$_SESSION["age"] = "36";
echo "Session variables are set.";
echo "<br>";
echo "Name: ".$_SESSION["name"];
echo "<br>";
echo "Age: ".$_SESSION["age"];
echo "<h1 style=color:red;>Session Variables Set Successfuly</h1>";
?>