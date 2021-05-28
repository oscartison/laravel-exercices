<?php
function fooBar($y) {
static $x = 2;
$x = $x + $y;
return $x;
}
echo fooBar(3);
echo " ";
echo fooBar(4);