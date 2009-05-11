<?php
class A {
    function foo() {
        if (isset($this)) {
            echo '$this is defined (';
            echo get_class($this);
            echo ")<br>";
        } else {
            echo "\$this is not defined.<br>";
        }
    }
}

class B {
    function bar() {
        A::foo();
    }
}

$a = new A();
$b = new B();

$a -> foo();
$b -> bar();
B::bar();
?>
