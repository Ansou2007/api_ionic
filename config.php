<?php
header("Access-Control-Allow-Origin:  *");
header("Access-Control-Allow-Methods: POST, GET, DELETE, PUT, PATCH, OPTIONS");
header('Access-Control-Allow-Headers: token, Content-Type');
header("Access-Control-Max-Age: 1728000");
//header("Content-Type: application/json; charset=UTF-8");
header('Content-Length: 0');
header('Content-Type: text/plain');
//header("Acess-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

try{
    $con = new pdo('mysql:host=localhost;dbname=trouve_ou_perdu;charset=utf8','root','');
}catch(PDOException $e){
    echo "Erreur de la base de données".$e->getMessage();
}




?>