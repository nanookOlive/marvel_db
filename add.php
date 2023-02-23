<?php

require_once('connection.php');

$nom = $_POST["nom"];
$id_secrete=$_POST["id_secrete"];
$alignement=$_POST['alignement'];
$force=$_POST['force'];
$intelligence=$_POST['intelligence'];
$endurance=$_POST['endurance'];
$adresse=$_POST['avatar'];
$resume_heros=$_POST['resume_heros'];

$query=$con -> prepare('insert into heros (nom_heros,id_secrete,alignement_heros,force_heros,endurance_heros,intelligence_heros,adresse_image,resume_heros)values(?,?,?,?,?,?,?,?)');
$query->execute([$nom,$id_secrete,$alignement,$force,$endurance,$intelligence,$adresse,$resume_heros]);


require_once('close.php');
include 'validation.html';
?>

