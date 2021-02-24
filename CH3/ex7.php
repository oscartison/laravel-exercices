<?php
function insert(array &$array, int $pos, int $val, int $nb) {
    $new_tab = array_fill($pos, $nb, $val);
    array_splice($array, $pos, 0, $new_tab);
}

$array = [4, 7, 6];
insert($array, 1, 8, 3);

print_r($array);
