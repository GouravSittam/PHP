
<?php
$r = 5; 
echo "Area of Circle with Radius $r is ", round(M_PI * pow($r, 2)), "<br>";
?>

<?php
define('PI', 3.1415926535897932384626433832795);
define("GRAVITY", 9.8);

$radius=5;
$cir=2*PI*$radius . "<br>";

echo"Example 1: circumference of a circle with radius $radius is $cir\n";
echo"Gravity on Earth is ". GRAVITY . "m/s<br>";
?>