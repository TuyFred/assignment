<?php
if (isset($_COOKIE['user'])) {
    echo "<h2>Welcome back, " . $_COOKIE['user'] . "!</h2>";
} else {
    echo "<h2>No cookie found.</h2>";
}
?>
