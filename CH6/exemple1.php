<?php

try {
    $pdo = new PDO(
    "mysql:host=localhost;dbname=ValvesDB;charset=utf8",
    "webii",
    "esi",
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
    );
 } catch (PDOException $e) {
    echo "connexion n'a pas pu se faire";
}

?>

<form action="exemple1.php">
    <select name="author_id">
        <option value="1">MCD</option>
        <option value="2">NRI</option>
    </select>
    <button> Submit </button>
</form>

<?php
$id = $_REQUEST["author_id"];

//faire des requetes
$sql = "SELECT * FROM Message WHERE author=:authorId";
$result = $pdo->prepare($sql);
$result->execute(['authorId' => $id]);

var_dump($result);

echo "<ul>";
foreach ($result as $row) {
    echo "<li>" . $row['title'] . "</li>";
}
echo "</ul>";

$pdo = null;
