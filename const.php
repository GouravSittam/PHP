<?php
const x= 45;
const y=78;
function add(){
    $result =x+y;
    echo "Sum is:  " . $result ."<br>";
}
add(x,y) ;


?>

<?php
$b=4 | 2 & 1;

echo $b . "<br>";
?>


<?php
$a=5;
$c=10;
$d=2;
$result=$a+$c*$c >= 20 ? $a++ : --$c + $c;
echo $result . "<br>";
?>


<?php
$q=4;
$w=2;
$r=3;

$e=$q+$w*$r**$w/$q-$w%$r;
echo $e;
?>