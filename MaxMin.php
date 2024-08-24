<?php
function MaxMin($arr) {
    if (!empty($arr)) {
        $maxValue = max($arr);
        $minValue = min($arr);

        echo "The maximum value is: $maxValue<br>";
        echo "The minimum value is: $minValue";
    } else {
        echo "The array is empty.<br>";
        
    }
}
?>
