<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=" " method="post" enctype="multipart/form-data"></form>
    Upload the File : <input type="file" name="myfile">
    <br>
    <input type="submit" value="Upload">

    <?php
    print_r($_FILES["myfile"]);
    ?>
</body>
</html>