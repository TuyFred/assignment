<?php
class Math {
    public function __call($name, $arguments) {
        if ($name == 'sum') {
            return array_sum($arguments);
        }
    }
}

$obj = new Math();
echo $obj->sum(1, 2, 3, 4, 5);
?>
