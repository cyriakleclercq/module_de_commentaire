<?php

include'log.php';

$username = (isset($_POST['username']) ? $_POST['username'] : null);
$username = filter_var($username,FILTER_SANITIZE_STRING);

$commentary = (isset($_POST['commentary']) ? $_POST['commentary'] : null);
$commentary = filter_var($commentary,FILTER_SANITIZE_STRING);



function ajout ($username,$commentary) {

    GLOBAL $conn;

    $stmt = $conn -> prepare("INSERT INTO `commentaire` (`username`,`commentary`) VALUE (?,?)");

    $stmt -> bind_param("ss",$username,$commentary);

    $stmt -> execute();

    $stmt -> close();

    header('Location:index.php');

}


if(isset($_POST['username']) && isset($_POST['commentary']) && isset($_POST['bouton'])) {

    ajout($username, $commentary);

}