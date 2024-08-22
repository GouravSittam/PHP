<?php

$x=3;
$y=4;

function add(){
    //use global var inside the fuction
    global $x,$y;
    return $x+$y;
}
//call the function and print the result
$result=add();
echo "The sum of $x and $y is = $result"."<br>";

?>



