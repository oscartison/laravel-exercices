<?php

function trierCrois(array $tab) {
    $new_tab = [];
    foreach($tab as $value) {
        if($value%2 == 0) {
            array_unshift($new_tab, $value);
        } else {
            array_push($new_tab, $value);
        }
    }
    return $new_tab;
}

$tab = [1,2,3,4,7,8,9,10,23,24,31];

var_dump(trierCrois($tab));