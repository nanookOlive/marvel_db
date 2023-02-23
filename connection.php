<?php

try{
    $con= new PDO('mysql:host=localhost;dbname=super_heros','nanook','ours');
    $con ->exec('SET NAMES "UTF8"');
}
catch(PDOException $e){
    echo "Erreur : ".$e->getMessage();
}

?>