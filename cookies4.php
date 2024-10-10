<?php
// Define the string to search within
$string = "Hello World! This is a Test string. Hello again!";

// Define the regular expression pattern for case-sensitive search
$pattern = "/Hello/";

// Perform the search using preg_match_all with PREG_OFFSET_CAPTURE
if (preg_match_all($pattern, $string, $matches, PREG_OFFSET_CAPTURE)) {
    echo "Matches found:\n";
    foreach ($matches[0] as $match) {
        echo "Match: " . $match[0] . " at position " . $match[1] . "\n";
    }
} else {
    echo "No matches found.";
}
?>