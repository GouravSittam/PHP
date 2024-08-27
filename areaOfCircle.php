<?php
$r = 5; 
echo "Area of Circle with Radius $r is " . round(M_PI * pow($r, 2)) . "<br>";
?>

<?php
define('PI', 3.14);
define('GRAVITY', 9.8);

$radius = 5;
$cir = 2 * PI * $radius;

echo "Example 1: Circumference of a circle with radius $radius is " . number_format($cir, 2) . "<br>";
echo "Gravity on Earth is " . GRAVITY . " m/s²<br>";
?>
