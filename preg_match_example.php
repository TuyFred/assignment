<?php
$pattern = "/^Hello/i"; // Pattern: Starts with 'Hello' (case-insensitive)
$text = "hello World!";

if (preg_match($pattern, $text)) {
    echo "Match found!";
} else {
    echo "No match found.";
}
?>
