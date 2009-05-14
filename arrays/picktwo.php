<?php

// pick two elements at random
$a = array("foo", "bar", "baz");
$keys = array_rand($a, 2);
print_r($keys);
echo "<br>";
echo $a[$keys[0]];
echo "<br>";
echo $a[$keys[1]];

?>
