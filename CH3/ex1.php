<?php
function root (int $x, int $n = 2):int  {
    if($n==0) {
        throw new InvalidArgumentException("N cannot be 0");
    }
    return pow($x, 1/$n);
}

try{
    echo root(9). "<br>\n";
    echo root(27,3). "<br>\n";
    echo root(27,0);
} catch(Exception $e) {
    echo $e;
}
