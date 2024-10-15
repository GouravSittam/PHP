<?php
// Function to sanitize a string
function sanitize_string($string) {
    // Remove HTML tags
    $string = strip_tags($string);
    // Remove extra spaces, tabs, and newlines
    $string = trim($string);
    // Convert special characters to HTML entities
    $string = htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
    // Remove backslashes
    $string = stripslashes($string);
    return $string;
}

// Example usage
$input_string = "<script>alert('Hello');</script> Hello World!   ";
$sanitized_string = sanitize_string($input_string);
//the code is value empty after one by one to complete the word


echo "Original String: " . $input_string . "<br>";
echo "Sanitized String: " . $sanitized_string;
?>