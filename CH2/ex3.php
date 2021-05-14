<?php
function countCalls () {
    static $x;
    $x = $x + 1;
    echo $x . "<br>\n";
}
countCalls();
countCalls();
countCalls();
countCalls();
