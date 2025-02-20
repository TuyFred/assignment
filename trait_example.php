<?php
trait Logger {
    public function log($message) {
        return "Log: $message";
    }
}

class User {
    use Logger;
}

$user = new User();
echo $user->log("User logged in!");
?>

