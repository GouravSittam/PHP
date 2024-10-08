<?php
// Set a cookie that expires in 1 hour
$cookie_name = "username";
$cookie_value = "JohnDoe";
$cookie_expire = time() + 3600; // 1 hour from now
setcookie($cookie_name, $cookie_value, $cookie_expire, "/");

// Check if the cookie is set
if(isset($_COOKIE[$cookie_name])) {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value: " . $_COOKIE[$cookie_name] . "<br>";
    echo "Expires in: " . date('Y-m-d H:i:s', $cookie_expire) . "<br>";
} else {
    echo "Cookie '" . $cookie_name . "' is not set!";
}
?>