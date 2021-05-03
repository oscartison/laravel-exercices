<?php 
$title = "tous les messages";
ob_start();
?>
<table class='messages'>
        <tr><th>Date</th><th>Auteur</th><th>Titre</th></tr>
        <?php foreach ($messages as $row): ?>
            <tr>
                <td> <?= $row["msg_date"]?> </td>
                <td> <?=$row["name"]?> </td>
                <td> <?=$row["title"]?> </a></td>
                </tr>
        <?php endforeach ?>
</table>

<?php 
$content = ob_get_clean();

require "Template.php";