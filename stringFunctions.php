<?php
$name="Avinash is a bad boy";
echo $name;
echo "<br>";
echo "The lenght of " . "my string is " . strlen($name) ;
echo "<br>";
echo str_word_count($name);
echo"<br>";
echo strrev("$name");
echo "<br>";
echo strpos($name,"Amit");
echo "<br>";
echo str_replace("Amit","Ravi",$name);
echo"<br>";
echo str_repeat($name,4);
echo"<br>";
echo "</pre>";
echo rtrim("    this is a good boy           ");
echo "<br>";
echo ltrim("    this is a good boy       ");
echo "</pre>"; 
?>

<br>
<?php
$namee="mam";
$name2=strrev($namee);
if($namee==$name2){
    echo"it is pal";
}else{
    echo "it is not pal";
}
?>