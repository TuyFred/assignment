<?php
class Demo {
    public function __call($name, $arguments) {
        return "Method '$name' was called with arguments: " . implode(", ", $arguments);
    }
}

$obj = new Demo();
echo $obj->testMethod("Hello", "PHP");
?>

