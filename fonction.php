<?php

    function liste_nom(){

        require_once('connection.php');
        $query = $con ->prepare('select nom_heros from heros');
        $query -> execute();
        $tableau = $query ->fetchAll();
        return $tableau;
        require_once('close.php');
    }

?>
