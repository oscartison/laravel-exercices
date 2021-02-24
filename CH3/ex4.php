<?php

function map(array &$arr, $fct)
{
    for ($i = 0; $i < count($arr); $i++) {
        $arr[$i] = $fct($arr[$i]);
    }
}

$tab = [5, 10, -1];
$carre = function ($x) {
    return $x ** 2;
};
map($tab, $carre);
var_dump($tab);
