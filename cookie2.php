<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cookie Management</title>
</head>
<body>
    <h1>Cookie Management</h1>

    <!-- Form to enter username -->
    <form method="post" action="">
        <label for="username">Enter Username:</label>
        <input type="text" id="username" name="username" required>
        <button type="submit" name="set_cookie">Set Cookie</button>
    </form>

    <?php
    $cookie_name = "user";

    // Set the cookie if form is submitted
    if (isset($_POST['set_cookie'])) {
        $cookie_value = $_POST['username'];
        $cookie_expire = time() + 3600; // 1 hour from now
        setcookie($cookie_name, $cookie_value, $cookie_expire, "/");
        echo "Cookie has been set!<br>";
    }

    // Display the cookie if it is set
    if (isset($_COOKIE[$cookie_name])) {
        echo "Cookie '" . $cookie_name . "' is set!<br>";
        echo "Value: " . $_COOKIE[$cookie_name] . "<br>";
    } else {
        echo "Cookie '" . $cookie_name . "' is not set!<br>";
    }
    ?>
</body>
</html>