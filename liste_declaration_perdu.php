<?php
include 'config.php';

$message = array();



$data = json_decode(file_get_contents('php://input'));

    $query = $con->prepare("SELECT * FROM declaration_perdu");
    $query->execute();
    $donnees = $query->fetchAll(PDO::FETCH_ASSOC);


echo json_encode($donnees);
//print_r($donnees);
