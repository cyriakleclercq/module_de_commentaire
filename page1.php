<?php

include'log.php';

//var_dump($_GET);

$username = $_GET['username'];
$username = filter_var($username,FILTER_SANITIZE_STRING);

$commentary = $_GET['commentary'];
$commentary = filter_var($commentary,FILTER_SANITIZE_STRING);



function ajout ($username,$commentary) {

    GLOBAL $conn;

    $stmt = $conn -> prepare("INSERT INTO `commentaire` (`username`,`commentary`) VALUE (?,?)");

    $stmt -> bind_param("ss",$username,$commentary);

    $stmt -> execute();

    $stmt -> close();

    include'affichage.php';

}


if(isset($_GET['username']) && isset($_GET['commentary']) ) {

    ajout($username, $commentary);


}