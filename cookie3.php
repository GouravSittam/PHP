<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cookie Management</title>
</head>
<body>
    <h1>Cookie Management</h1>

    <!-- Form to enter username and select language -->
    <form method="post" action="">
        <label for="username">Enter Username:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="language">Select Language:</label>
        <select id="language" name="language" required>
            <option value="English">English</option>
            <option value="Spanish">Spanish</option>
            <option value="French">French</option>
            <option value="German">German</option>
        </select>
        <br>
        <button type="submit" name="set_cookie">Set Cookies</button>
    </form>

    <!-- Form to delete cookies -->
    <form method="post" action="">
        <button type="submit" name="delete_cookie">Delete Cookies</button>
    </form>

    <?php
    $username_cookie = "username";
    $language_cookie = "language";

    // Set the cookies if form is submitted
    if (isset($_POST['set_cookie'])) {
        $username_value = $_POST['username'];
        $language_value = $_POST['language'];
        $cookie_expire = time() + 3600; // 1 hour from now
        setcookie($username_cookie, $username_value, $cookie_expire, "/");
        setcookie($language_cookie, $language_value, $cookie_expire, "/");
        echo "Cookies have been set!<br>";
    }

    // Delete the cookies if delete button is pressed
    if (isset($_POST['delete_cookie'])) {
        setcookie($username_cookie, "", time() - 3600, "/");
        setcookie($language_cookie, "", time() - 3600, "/");
        echo "Cookies have been deleted!<br>";
    }

    // Display the cookies if they are set
    if (isset($_COOKIE[$username_cookie]) && isset($_COOKIE[$language_cookie])) {
        echo "Cookie '" . $username_cookie . "' is set!<br>";
        echo "Value: " . $_COOKIE[$username_cookie] . "<br>";
        echo "Cookie '" . $language_cookie . "' is set!<br>";
        echo "Value: " . $_COOKIE[$language_cookie] . "<br>";
    } else {
        echo "Cookies are not set!<br>";
    }
    ?>
</body>
</html>