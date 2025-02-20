<?php
class Circle {
    // Defining a constant
    const PI = 3.14159;

    public function calculateArea($radius) {
        return self::PI * $radius * $radius;
    }
}

$circle = new Circle();
echo "Area of circle with radius 5: " . $circle->calculateArea(5);
?>
