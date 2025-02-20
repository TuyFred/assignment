<?php
class Math {
    public function __call($name, $arguments) {
        if ($name == 'sum') {
            return array_sum($arguments);
        }
    }
}

$obj = new Math();
echo $obj->sum(2, 4, 6, 8, 10);
?>
