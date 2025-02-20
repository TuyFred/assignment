<?php
// Final class cannot be inherited
final class Vehicle {
    public function startEngine() {
        return "Engine started!";
    }
}

// This will cause an error as you cannot extend a final class
// class Car extends Vehicle {}

$vehicle = new Vehicle();
echo $vehicle->startEngine();
?>
