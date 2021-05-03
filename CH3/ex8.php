<?php
function jour( string $jour) {
    static $tab = ["lundi"=> 1,
    "mardi" => 2,
    "mercredi" => 3,
    "jeudi" => 4,
    "vendredi" => 5,
    "samedi"=> 6,
    "dimanche"=> 7];
    if (array_key_exists($jour,$tab)) {
        return $tab[$jour];
    } else {
        return -1;
    }
}

echo jour("lundi");
echo jour("test");

