<?php
class Car {
    public $brand;
    public $color;

    public function describe() {
        return "This car is a $this->color $this->brand.";
    }
}

// Creating an object
$myCar = new Car();
$myCar->brand = "their brand is Toyota";
$myCar->color = "Red";

echo $myCar->describe();
?>
