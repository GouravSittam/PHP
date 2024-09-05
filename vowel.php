<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VOWEL</title>
</head>
<body>
    <form method="POST" action="">
        <label for="str">Enter the String</label>
        <input type="text" name="str" id="str" placeholder="Enter Here">
        <input type="submit" value="Click to Find no. of VOWELS">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $str = $_POST['str'];
        $countvow = 0;
        $vow = ["a", "e", "i", "o", "u", "A", "E", "I", "O", "U"];
        for ($i = 0; $i < strlen($str); $i++) {
            if (in_array($str[$i], $vow)) {
                $countvow++;
            }
        }
        echo "<h1>The count of vowels is $countvow</h1>";
    }
    ?>
</body>
</html>
