<?php
require_once("ex6.php");

echo "Bonjour, ".  htmlspecialchars($_GET["prenom"]) . " " . htmlspecialchars($_GET["nom"]);

$new_date = date('d-m', strtotime($_GET['date']));

if($new_date == date('d-m')) {
    echo "test";
} else {
    echo "pas annif";
}

showCalendar(date('n', strtotime($_GET['date'])),date('Y', strtotime($_GET['date'])) );