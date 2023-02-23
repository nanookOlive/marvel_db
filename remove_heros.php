<?php

require_once('connection.php');
$nom_send=$_POST['nom_send'];
$nom_heros_sup=$con->prepare('delete from heros where nom_heros="'.$nom_send.'"');
$nom_heros_sup->execute();
require_once('close.php');
include 'validation.html';
?>
