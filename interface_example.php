<?php
interface Animal {
    public function makeSound();
}

interface Pet {
    public function play();
}

class Cat implements Animal, Pet {
    public function makeSound() {
        return "Meow!";
    }

    public function play() {
        return "Playing with a ball!";
    }
}

$cat = new Cat();
echo $cat->makeSound() . "<br>";
echo $cat->play();
?>
