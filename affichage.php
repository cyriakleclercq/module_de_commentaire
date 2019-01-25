<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 24/01/2019
 * Time: 14:04
 */

include "log.php";

function affichage () {

    GLOBAL $conn;

    $sql = "SELECT * FROM `commentaire` ORDER BY `id` desc LIMIT 5";

        $arr = array();

        $result = $conn->query($sql);

        while ($row = $result->fetch_assoc())
        {

            $arr[] = $row;

        }

        echo json_encode($row);

}

affichage();

