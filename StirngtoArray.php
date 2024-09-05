<?php
echo"Today's date is : ";
$today = date("d/m/Y");
echo $today;
echo"<br>";

?>

<?php
$string = "Hello world this is a test";
$array = explode(" ", $string);
print_r($array);
echo"<br>";
?>


<?php
$string = "Hello world";
$array = str_split($string);
print_r($array);
echo"<br>";
?>


<!-- write a php script to add two numbers using function -->