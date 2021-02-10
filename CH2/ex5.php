<?php
$fruits = array("Apple", "Banana", "Orange", "Pineapple");
$i = 0;
echo "<table border=1>";
while ($i < count($fruits)) {
    echo "<tr><td>$fruits[$i]</td></tr>";
    $i++;
}
echo "</table>";
echo "<table border=1>";
$i = 0;
do {
    echo "<tr><td>$fruits[$i]</td></tr>";
    $i++;
} while ($i != count($fruits));
echo "</table>";

echo "<table border=1>";
for($j = 0; $j < count($fruits); $j++) {
    echo "<tr><td>$fruits[$j]</td></tr>";
    $i++;
} 
echo "</table>";

echo "<table border=1>";
foreach($fruits as $element) {
    echo "<tr><td>$element</td></tr>";
    $i++;
} 
echo "</table>";