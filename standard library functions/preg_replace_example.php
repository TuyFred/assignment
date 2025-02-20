<?php
$text = "I love Java and JavaScript!";
$pattern = "/Java/";
$replacement = "PHP";

$new_text = preg_replace($pattern, $replacement, $text);
echo $new_text;
?>
