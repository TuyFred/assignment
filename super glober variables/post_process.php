<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']); // Prevent XSS
    echo "<h2>Welcome, $name!</h2>";
} else {
    echo "<h2>No data received.</h2>";
}
?>
