<?php


    class hero
    {

        private $nom_heros;
        private $id_secrete;
        private $alignement_heros;
        private $force_heros;
        private $intelligence_heros;
        private $endurance_heros;
        private $adresse_image;
        private $resume_heros;

        function creation($nom)
        {
            require('connection.php');
            $stm=$con ->query('select * from heros where nom_heros="'.$nom.'"');
            $tab= $stm ->fetchObject('hero'); 
            return $tab;

        }

        function tous_heros()
        {
            require('connection.php');
            $stm=$con ->query('select nom_heros from heros');
            $tab= $stm ->fetchAll(); 
            return $tab;

        }
        function getNom(){

            return $this->nom_heros;
        }
        function getId_secrete()
        {
            return $this->id_secrete;
        }
        function getForce(){ 
            return $this -> force_heros;
        }

        function getIntelligence()
        {
            return $this -> intelligence_heros;
        }
        function getEndurance()
        {
            return $this ->endurance_heros;
        }
        function getAlignement()
        {
            return $this -> alignement_heros;
        }
        function  getResume()
        {
            return $this -> resume_heros;
        }
        function getAdresse()
        {
            return $this -> adresse_image;
        }

    }

    

    ?>