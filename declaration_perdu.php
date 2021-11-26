<?php
include 'config.php';

$message = array();
$code = $data['code_declaration'];
$date = $data['date_declaration'];
$description = $data['descriptions'];
$contact = $data['contact'];


$data = json_decode(file_get_contents('php://input'));
if($data){
    $query = $con->prepare("INSERT INTO declaration_perdu(id_utilisateur,date_declaration,descriptions,contact) VALUES(?,?,?,?)");
    $query->execute(array($date,$description,$contact));

}
