<?php
$text = "Hello, PHP is awesome!";
$position = strpos($text, "PHP");

if ($position !== false) {
    echo "Found 'PHP' at position: $position";
} else {
    echo "'PHP' not found!";
}
?>
