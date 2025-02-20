<?php
class User {
    public function __construct() {
        echo "User object created!<br>";
    }

    public function __destruct() {
        echo "User object destroyed!";
    }
}

$user = new User();
echo "Some operations...<br>";
// Destructor is called automatically when the script ends or object is unset.
?>
