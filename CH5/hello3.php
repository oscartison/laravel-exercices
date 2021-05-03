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
?>
<table>
    <tr>
        <th>ECTS</th>
        <td><?= $ues[$ue]->ects ?></td>
    </tr>
    <tr>
        <th>AAs</th>
        <td><?= implode(', ', $ues[$ue]->aas); ?></td>
    </tr>
</table>