<?php $title = "Valves-Detail messages"; ?>
<?php ob_start(); ?>
    <h1>Details messages</h1>
    <table class='messages'>
    <tr><th>Contenu</th><th>Auteur</th><th>Date</th></tr>
<?php foreach ($detailMessage as $row):?>
    <tr>
        <td><?= $row["content"]?></td>
        <td><?= $row["title"]?></td>
        <td><?= $row["msg_date"] ?></td>
    </tr>
<?php endforeach; ?>
    </table>
<?php $content = ob_get_clean(); ?>
<?php require "Template.php"; ?>

