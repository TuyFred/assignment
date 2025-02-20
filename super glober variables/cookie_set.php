<?php
setcookie("user", "fred", time() + 3600, "/"); // 1-hour expiry
echo "<h2>Cookie set! <a href='cookie_get.php'>View Cookie</a></h2>";
?>
