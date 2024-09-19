<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        Upload the File: <input type="file" name="myfile">
        <br>
        <input type="submit" value="Upload">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_FILES["myfile"]) && $_FILES["myfile"]["error"] == 0) {
            print_r($_FILES["myfile"]);
            $file_name = $_FILES["myfile"]["name"]."<br>";
            $file_size = $_FILES["myfile"]["size"]."<br>";
            $file_type = $_FILES["myfile"]["type"]."<br>";
            $file_tempname = $_FILES["myfile"]["tmp_name"]."<br>";
        }
    }
    ?>
</body>
</html>