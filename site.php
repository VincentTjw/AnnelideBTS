
<?php
$title = "Site";
include "header.php";
include_once "config.php";
$pdo = new PDO("mysql:host=" . Config::SERVEUR . ";dbname=" . Config::BDD
    , Config::UTILISATEUR, Config::MOTDEPASSE);

$requete = $pdo->prepare("select * from plage");

$requete->execute();
$lignes = $requete->fetchAll();

?>
<table>
    <td>
    <th>Date</th>
    <th>Etude</th>
    <th>Description</th>
    <th>Action</th>
    </td>
    <?php
    foreach ($lignes

    as $l) {
    ?>
    <tr>
        <td><?php echo $l["date"] ?></td>
        <td><?php echo $l["etude"] ?></td>
        <td><?php echo $l["description"] ?></td>

    </tr>
        <?php
    }
    ?>
</table>