<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
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

            $file_name = $_FILES["myfile"]["name"];
            $file_size = $_FILES["myfile"]["size"];
            $file_type = $_FILES["myfile"]["type"];
            $file_tempname = $_FILES["myfile"]["tmp_name"];
            

            echo "File Name: " . $file_name . "<br>";
            echo "File Size: " . $file_size . " bytes<br>";
            echo "File Type: " . $file_type . "<br>";
            echo "Temporary File: " . $file_tempname . "<br>";

            if(!is_dir("BTech-KN")){
                mkdir("BTech-KN", 0755);
            }

            if(move_uploaded_file($file_tempname, "BTech-KN/" . $file_name)){
                echo "File has been uploaded successfully.<br>";
            } else {
                echo "File upload failed.<br>";
            }

          
            if($file_size<=100) {
                echo "File size is supported.<br>";
            }
        } else {
            echo "File size is not supported.<br>";
        }
        $allowed_file=["jpg","png","jpeg","gif"];
        
    }
    ?>
</body>
</html>