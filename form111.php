<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$name_error = "";
$phone_error = "";
$email_error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["submit"])) {
        $username = $_POST["username"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $pattern = "/^\w+$/"; // Corrected regex pattern for username

        // Validate username
        if (empty($username)) {
            $name_error = "Username cannot remain empty";
        } elseif (!preg_match($pattern, $username)) {
            $name_error = "Invalid Username";
        }

        // Validate phone number
        if (empty($phone)) {
            $phone_error = "Phone number cannot remain empty";
        } elseif (!preg_match("/^\d{10}$/", $phone)) {
            $phone_error = "Phone number must be exactly 10 digits";
        }

        // Validate email
        if (empty($email)) {
            $email_error = "Email cannot remain empty";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_error = "Invalid Email";
        }

        // If no errors, display the username, phone number, and email
        if (empty($name_error) && empty($phone_error) && empty($email_error)) {
            echo "Username: " . htmlspecialchars($username) . "<br>";
            echo "Phone Number: " . htmlspecialchars($phone) . "<br>";
            echo "Email: " . htmlspecialchars($email) . "<br>";
        }
    }
}
?>

<form method="POST" action="">
    <label for="username">Enter Username: </label>
    <input type="text" id="username" name="username">
    <span style="color:red;"><?php echo $name_error; ?></span>
    <br>
    <label for="phone">Enter Phone Number: </label>
    <input type="text" id="phone" name="phone">
    <span style="color:red;"><?php echo $phone_error; ?></span>
    <br>
    <label for="email">Enter Email: </label>
    <input type="text" id="email" name="email">
    <span style="color:red;"><?php echo $email_error; ?></span>
    <br>
    <button type="submit" name="submit">Submit</button>
</form>
</body>
</html>