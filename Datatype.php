
<?php
$x = 123;
if(is_int($x)){
    if($x>0){
        echo"the mumber is positive and integer";
    }
        elseif($x<0){
        echo"the nnumber is nagative and integer";
    }
        elseif($x==0){
        echo"the number is zero and integer";
    }else{
        echo"the var is not an integer";
    }
           
}
?>

<br>

<?php
$x = 123;

if(is_int($x)) {
    if($x > 0) {
        echo "The number is positive and an integer.";
    } elseif($x < 0) {
        echo "The number is negative and an integer.";
    } else {
        echo "The number is zero and an integer.";
    }
} else {
    echo "The variable is not an integer.";
}
?>

<br>

<?php
//write the php script to calculate the percentage
function calculatePercentage($totalMarks, $obtainedMarks) {
    return ($obtainedMarks / $totalMarks) * 100;
}

function determineGrade($percentage) {
    if ($percentage >= 90) {
        return "A+";
    } elseif ($percentage >= 80) {
        return "A";
    } elseif ($percentage >= 70) {
        return "B";
    } elseif ($percentage >= 60) {
        return "C";
    } elseif ($percentage >= 50) {
        return "D";
    } else {
        return "F";
    }
}
$totalMarks = 500; 
$obtainedMarks = 425; 
$percentage = calculatePercentage($totalMarks, $obtainedMarks);
$grade = determineGrade($percentage);
echo "Percentage: " . $percentage . "%<br>";
echo "Grade: " . $grade;

?>

<br>

//area of circle<br>
<?php
$r=10;
$area=pi()*$r*$r;
echo $area;
?>

<br>

//area of square<br>
<?php
$side = 10;
$area = $side * $side;
echo $area;
?>

<br>

//area of rectangle<br>
<?php
$length = 20;
$width = 30;
$area = $length * $width;
echo "Area: " . $area;  
?>

<br>
//area of triange<br>
<?php
$base=10;
$height=30;
$areaa=$base*$height/2;
echo $areaa;