<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 17/01/2019
 * Time: 14:19
 */
include'log.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="style.css" media="screen" title="no title" charset="utf-8">
</head>
<body>

<div class="corps">

    <form method="post" action="page1.php">

        <div>
            <label for="username"> Pseudo : </label>
                <input type="text" name="username" value="" id="username">
        </div>

        <div class="comm">
            <h3
            >  Commentaire : </h3>
            <textarea name="commentary" value="" id="commentary"> </textarea>
        </div>

        <div class="bt">
            <button type="submit" name="bouton" id="bouton"> push </button>
        </div>

    </form>
</div>

</body>
</html>

<?php

function affichage () {

    GLOBAL $conn;

    $sql = "SELECT * FROM `commentaire` ORDER BY `id` desc LIMIT 5";

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
    <a  href="page2.php"><img src="go-next-5.png" height="100" width="100" alt="page_suivante"></a>
</div>