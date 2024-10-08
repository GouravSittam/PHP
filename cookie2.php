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

    <!-- Form to delete cookie -->
    <form method="post" action="">
        <button type="submit" name="delete_cookie">Delete Cookie</button>
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

    // Delete the cookie if delete button is pressed
    if (isset($_POST['delete_cookie'])) {
        setcookie($cookie_name, "", time() - 3600, "/");
        echo "Cookie has been deleted!<br>";
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