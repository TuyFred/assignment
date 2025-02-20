<?php
class Demo {
    public static function __callStatic($name, $arguments) {
        return "Static method '$name' was called with arguments: " . implode(", ", $arguments);
    }
}

echo Demo::testMethod("Hello", "World");
?>
