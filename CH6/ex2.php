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

?>


<?php

try {
    //faire des requetes
$sql = "SELECT title, msg_date, Author.name, Message.id id 
FROM Message 
join Author on Message.author = Author.id
 order by msg_date";
$result = $pdo->query($sql);
} catch (PDOException $e) {
    echo "mauvaise requete";
}


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
        <th>Date</th>
        <th>Auteur</th>
        <th>Titre</th>
    </tr>

    <?php foreach ($result as $row) : ?>
        <tr>
            <td><?= $row['msg_date'] ?></td>
            <td><?= $row['name'] ?></td>
            <td><a href='ex3.php?id=<?= $row['id'] ?>'><?= $row['title'] ?></a></td>
        </tr>
    <?php endforeach ?>
</table>
</body>
</html>
