<?php
function swap(&$a, &$b) {
    $temp = $a;
    $a = $b;
    $b = $temp; 
}

$a = 2; 
$b = 3;
echo "a = $a, b = $b<br>";
swap($a, $b);
echo "a = $a, b = $b<br>";