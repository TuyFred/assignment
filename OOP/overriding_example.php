<?php
class ParentClass {
    public function showMessage() {
        return "Message from lecture";
    }
}

class ChildClass extends ParentClass {
    public function showMessage() {
        return "Message from fred";
    }
}

$obj = new ChildClass();
echo $obj->showMessage();
?>
