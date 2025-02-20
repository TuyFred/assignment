<?php
session_start();
if (isset($_SESSION['username'])) {
    echo "<h2>Welcome, " . $_SESSION['username'] . "!</h2>";
} else {
    echo "<h2>No session data found.</h2>";
}
?>
