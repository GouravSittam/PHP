
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