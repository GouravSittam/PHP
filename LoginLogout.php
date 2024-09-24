<?php
session_start();

// Set session timeout (in seconds)
$session_timeout = 1800; // 30 minutes

function login($username, $password) {
    if ($username === 'admin' && $password === 'password') {
        $_SESSION['user'] = $username;
        $_SESSION['last_activity'] = time();
        return true;
    }
    return false;
}

function logout() {
    unset($_SESSION['user']);
    unset($_SESSION['last_activity']);
    session_destroy();
}

function isLoggedIn() {
    return isset($_SESSION['user']);
}

function checkSessionTimeout($timeout) {
    if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity'] > $timeout)) {
        logout();
        return true;
    }
    $_SESSION['last_activity'] = time();
    return false;
}

if (isLoggedIn() && checkSessionTimeout($session_timeout)) {
    $timeout_message = "Your session has expired. Please log in again.";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['login'])) {
        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';
        if (login($username, $password)) {
            echo "Login successful!";
        } else {
            echo "Invalid username or password.";
        }
    } elseif (isset($_POST['logout'])) {
        logout();
        echo "Logged out successfully.";
    }
}
?>

<!DOCTYPE html>
<html>
<body>
    <?php if (isset($timeout_message)): ?>
        <p style="color: red;"><?php echo $timeout_message; ?></p>
    <?php endif; ?>

    <?php if (isLoggedIn()): ?>
        <h2>Welcome, <?php echo $_SESSION['user']; ?>!</h2>
        <p>Last activity: <?php echo date('Y-m-d H:i:s', $_SESSION['last_activity']); ?></p>
        <form method="post">
            <input type="submit" name="logout" value="Logout">
        </form>
    <?php else: ?>
        <h2>Login</h2>
        <form method="post">
            <input type="text" name="username" placeholder="Username" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <input type="submit" name="login" value="Login">
        </form>
    <?php endif; ?>
</body>
</html>