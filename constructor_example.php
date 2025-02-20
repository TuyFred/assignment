<?php
class Person {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function greet() {
        return "Hello, my name is $this->name!";
    }
}

$person1 = new Person("fred");
echo $person1->greet();
?>
