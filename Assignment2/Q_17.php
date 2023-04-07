<!--Write a PHP function that checks whether a passed string 
is a palindrome or not?-->
<?php
echo "result is    :   ";
$str=$_POST['string'];
palindrome($str);
function palindrome($str){
    $str1=strrev($str);
    if($str==$str1){
        echo "string is palindrome"," ->",$str;
    }
    else{
        echo "string is not palindrome","->",$str;
    }
}
?>