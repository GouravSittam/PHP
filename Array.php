<?php
$cars=array("Volvo","BMW","Toyota");
var_dump($cars);
echo "<br>";
for($i=0;$i<sizeof($cars);$i++){
    echo $cars[$i];
    echo"<br>";
}
?>

<br>

<?php
$array = [3, 5, 1, 9, 2, 8, 4, 7];

$maxValue = max($array);

$minValue = min($array);

echo "The maximum value in the array is: " . $maxValue . "\n"."<br>";
echo "The minimum value in the array is: " . $minValue . "\n";
?>
