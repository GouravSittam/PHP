<?php
function chnage_name($nm){
    echo"Initially the name $nm \n";
    $nm=$nm."_new";
    echo"The functions change tyhe name to $nm \n";
}


$name ="john";
echo "my name is $name \n";
chnage_name($name);
echo"my name is still $name";
?>