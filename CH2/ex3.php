<?php
function countCalls () {
    static $x = 0;
    $x = $x + 1;
    echo $x . "<br>\n";
}
countCalls();
countCalls();
countCalls();
countCalls();
