<?php
class Shape {
    public function area() {
        return "Undefined area";
    }
}

class Circle extends Shape {
    public function area() {
        return "Area = π × r²";
    }
}

$shape = new Shape();
$circle = new Circle();

echo $shape->area() . "<br>";
echo $circle->area();
?>
