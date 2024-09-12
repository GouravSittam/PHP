<?php
function product(...$x){
    $prod = 1;
    foreach($x as $i){
        $prod *= $i;
    }
    return $prod;
}

$res = product(2, 3, 4);
echo $res; // Outputs 24
?>
