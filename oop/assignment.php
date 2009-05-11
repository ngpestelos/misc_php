<?php
$assigned = $instance;
$reference =& $instance;

$instance->var = '$assigned will have this value';
$instance->null; // both become null

var_dump($instance);
var_dump($reference);
var_dump($assigned);
?>
