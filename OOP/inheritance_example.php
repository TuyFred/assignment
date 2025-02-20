<?php
class Animal {
    public $name;

    public function makeSound() {
        return "Some sound";
    }
}

class Dog extends Animal {
    public function makeSound() {
        return "came back!";
    }
}

$dog = new Dog();
echo $dog->makeSound();
?>
