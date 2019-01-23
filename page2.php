
<?php
include'log.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="style.css" media="screen" title="no title" charset="utf-8">
</head>

<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 18/01/2019
 * Time: 14:42
 */

function affichage () {

    GLOBAL $conn;

    $sql = "SELECT * FROM `commentaire` ORDER BY `id` desc LIMIT 6, 10";

    $result = $conn->query($sql);

    while ($row = $result->fetch_assoc()) {
        ?>

        <div class="corps1">
            <div class="pseudo"> <?= $row['username'] ?> </div>

            <div class="commentaire"> <?= nl2br($row['commentary']) ?> </div>

            <div class="date"> <?= $row['date'] ?> </div>

        </div>
        <?php
    }
}

affichage();

?>

<div class="lien">
    <a  href="index.php"><img src="go-previous-5.png" height="100" width="100" alt="page_précédente"> </a>
</div>

