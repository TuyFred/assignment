<?php
if (isset($_GET['name'])) {
    $name = htmlspecialchars($_GET['name']);
    echo "<h2>Hello, $name!</h2>";
} else {
    echo "<h2>No name provided.</h2>";
}
?>
