<?php
namespace App;

class User {
    public function getName() {
        return "User from App namespace";
    }
}

$user = new User();
echo $user->getName();
?>
