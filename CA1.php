<!DOCTYPE html>
<html>
<head>
    <title>Factorial Calculation</title>
</head>
<body>

<form method="post">
    Enter the number: <input type="number" name="num" min="0" required>
    <input type="submit" name="submit" value="Find Factorial">
</form>

<?php
if (isset($_POST['submit'])) {
    $num = $_POST['num'];
    $factorial = 1;
    $i = 1;
    
    while ($i <= $num) {
        $factorial *= $i;
        $i++;
    }
    
    echo "Factorial of the number entered by the user is $factorial";
}
?>

</body>
</html>
