<?php
session_start();
$_SESSION['username'] = "fred"; // Storing session data
echo "<h2>Session started! <a href='session_display.php'>View Session</a></h2>";
?>
