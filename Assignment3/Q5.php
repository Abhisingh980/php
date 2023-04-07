<!--Write a PHP SCRIPT to create cookies and display them.-->
<?php
setcookie("name", "John", time()+3600);
setcookie("age", "36", time()+3600);
echo "<h1 style=color:red;>Cookies Set Successfuly</h1>";
?>