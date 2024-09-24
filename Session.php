<?php

session_start();

function setSessionVar($key, $value) {
    $_SESSION[$key] = $value;
}

function getSessionVar($key, $default = null) {
    return $_SESSION[$key] ?? $default;
}

function removeSessionVar($key) {
    if (isset($_SESSION[$key])) {
        unset($_SESSION[$key]);
    }
}

function destroySession() {
    session_destroy();
}

function regenerateSessionId() {
    session_regenerate_id(true);
}

setSessionVar('user_id', 123);

$userId = getSessionVar('user_id');
echo "User ID: " . $userId . "<br>";

removeSessionVar('user_id');

$userId = getSessionVar('user_id', 'Not found');
echo "User ID after removal: " . $userId . "<br>";

regenerateSessionId();

// destroySession();