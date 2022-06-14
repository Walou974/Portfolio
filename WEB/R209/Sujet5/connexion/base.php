<?php
include("../.ht_mysql.inc");
try {
    $bd = new PDO ( "mysql:host=$server;dbname=$base","$user","am10387971b6" ); 
    $bd->exec("SET NAMES utf8");
}
catch (Exception $e){
    print_r($e -> getMessage());
    die("Erreur de connexion à la base ");
    
}

?>