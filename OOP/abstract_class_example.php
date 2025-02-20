<?php
abstract class Animal {
    abstract public function makeSound(); // Must be implemented by child class

    public function sleep() {
        return "I am sleeping!";
    }
}

class Dog extends Animal {
    public function makeSound() {
        return "came back!";
    }
}

$dog = new Dog();
echo $dog->makeSound() . "<br>";
echo $dog->sleep();
?>
