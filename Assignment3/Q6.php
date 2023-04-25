<!---Write PHP program to create session variables and display them.-->
<?php
session_start();
$_SESSION["name"] = "John";
$_SESSION["age"] = "36";
echo "<h1 style=color:red;>Session Variables Set Successfuly</h1>";
?>