<?php
if(isset($_POST['submit'])){
        if(!empty($_POST['gender'])) {
          echo '  ' . $_POST['gender'];
        } else {
          echo 'Please select the value.';
        }
      }
echo "<br>";
if(isset($_POST['submit'])){

    if(!empty($_POST['language'])) {

        foreach($_POST['language'] as $value){
            echo "Chosen language is : ".$value.'<br/>';
        }

    }

}
echo $_POST["fname"];
echo "<br>";
// echo $_post['password'];
// echo "<br>";
// echo $_post['email'];
// echo "<br>";
echo $_POST["mobilenumber"];
echo "<br>";
foreach($course as $value)
{
echo $value;
echo "<br>";
}
?>
