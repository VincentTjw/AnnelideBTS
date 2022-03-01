<?php

$title = "Annélide";
include "header.php";
?>
<body>
<h1>Commencement</h1>
<?php


include_once "config.php";
$pdo = new PDO("mysql:host=" . Config::SERVEUR . ";dbname=" . Config::BDD
    , Config::UTILISATEUR, Config::MOTDEPASSE);

$requete = $pdo->prepare("select * from site");

$requete->execute();
$lignes = $requete->fetchAll();

?>

<table class="table table-striped">
    <tr>
        <th>site</th>
        <th>action</th>
    </tr>
    <?php
    foreach ($lignes as $l) {
        ?>
        <tr>
            <td><?php echo $l["site"] ?></td>
            <td>
                <a href="site.php?id=<?php echo $l["id"] ?>"
                   class="btn btn-success">Voir</a>

        </tr>
        <?php
    }
    ?>
</table>
</body>
</html>