<?php
$text = "I love python and php!";
$pattern = "/php/";
$replacement = "php";

$new_text = preg_replace($pattern, $replacement, $text);
echo $new_text;
?>
