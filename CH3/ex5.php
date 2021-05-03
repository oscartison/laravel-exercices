<?php

function inser(array &$arr, $val) {
    $arr[$val] = $val;
    }


    $tab = [5, 10, -1];
    inser($tab,42);
    var_dump($tab);
    echo count($tab);
