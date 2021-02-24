<?php
$t = date("H");

if ($t > "4" && $t < "12") {
  echo "Bonne journée !";
} else if ($t > "12" && $t < "16") {
    echo "Bon après-midi !";
} else if ($t > "16" && $t < "20") {
    echo "Bonne soirée !";
} else {
    echo "Bonne nuit !";
}

echo $t;
?> 