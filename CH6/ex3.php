<?php
try {
    $pdo = new PDO(
    "mysql:host=localhost;dbname=ValvesDB;charset=utf8",
    "webii",
    "esi",
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
    );
 } catch (PDOException $e) {
    echo "connection n'a pas pu se faire";
}


$id = $_REQUEST["id"];

//faire des requetes
$sql = "SELECT * FROM Message WHERE id=:messageId";
$result = $pdo->prepare($sql);
$result->execute(['messageId' => $id]);


$pdo = null;

?>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<table>
    <tr>
        <th>ID</th>
        <th>Date message</th>
        <th>Titre</th>
        <th>Contenu</th>
        <th>Auteur</th>
    </tr>

    <?php foreach ($result as $row) : ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['name'] ?></td>
            <td><?= $row['title'] ?></td>
            <td><?= $row['content'] ?></td>
            <td><?= $row['author'] ?></td>

        </tr>
    <?php endforeach ?>
</table>
</body>
</html>
