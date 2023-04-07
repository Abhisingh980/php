<!--Write a PHP program to create a file and insert data into it using fwrite( ) and
display the content of the file.-->
<?php
$myfile = fopen("edit.txt","w") or die("Unable to open file!");
$txt = "Abhinesh";
fwrite($myfile, $txt);
$txt = "Kumar\n";
fwrite($myfile, $txt);
fclose($myfile);
echo "<h1 style=color:green;>File Created Successfuly</h1>";
?>
