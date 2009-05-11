<?php
class MyClass {
  public $public = "Public";
  protected $protected = "Protected";
  private $private = "Private";

  function printHello() {
    echo $this->public, "<br>";
    echo $this->protected, "<br>";
    echo $this->private, "<br>";
  }
}

$obj = new MyClass();
echo $obj->public;
echo "<br>";
echo $obj->printHello();
?>
