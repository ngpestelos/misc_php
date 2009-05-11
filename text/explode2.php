<?php
$str = 'one|two|three|four';

// positive limit
print_r(explode('|', $str, 2));
echo "<br>";
print_r(explode('|', $str, -1)); //count from the end
?>
