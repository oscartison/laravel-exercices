<?php
$ue = $_GET["ue"];
$ues = [
    "webg2" => (object) [
        "ects" => 5,
        "aas" => ["Développement WEB I"]
    ],
    "webg4" => (object) [
        "ects" => 4,
        "aas" => ["Développement WEB II", "Ergonomie"]
    ],
    "webg5" => (object) [
        "ects" => 3,
        "aas" => ["Développement WEB III"]
    ]
];
echo json_encode($ues[$ue]);
