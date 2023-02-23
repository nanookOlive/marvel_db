


<!DOCTYPE html>
<html>
    <head>
    
        <meta name="viewport" content="width=device-width,initial-scale=1" /> 
        <title>Marvel Database</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href='style.css'>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Marvel&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>



    </head>

    <body>

        
        <!--La bannière élément 1-->

        <div class="banniere">
            <h1>MARVEL DATABASE</h1>
            <div class="btn_a_propos">à propos</div>
        </div>
        <div class="a_propos">Cette application est un exercice. Le projet ici 
            est de réaliser un <a href="https://fr.wikipedia.org/wiki/CRUD" target="_blank">CRUD</a> avec Php et MariaDB. </div>
        </div>    
        <!--Liste de tous les hero de la db -->

        <!--récupération de la liste de tous les noms-->

        <?php

            require('class_hero.php');
            $query_hero=new hero();
            $liste_nom = $query_hero ->tous_heros();


        ?>
        
        <form method ='POST'class="liste_heros">

        <?php foreach($liste_nom as $nom)
        {?>
            <input type='submit' value=<?php echo $nom['nom_heros']?> class='nom_hero' name="name" >
            
        <?php }
           ?> 
        
        </form>
        <!--affichage du heros-->
           
        <?php 
            $nom_h='';
            if(!isset($_POST['name'])){
                $nom_h='Wolverine';
            }
            else{$nom_h=$_POST['name'];}
            $hero=$query_hero ->creation($nom_h);
            $nom=$hero->getNom();
            $force=$hero->getForce();
            $intelligence=$hero->getIntelligence();
            $endurance=$hero->getEndurance();
            $alignement=$hero->getAlignement();
            $resume_heros=$hero->getResume();
        ?>
        

        <div class="affichage_hero">

            <div class="bloc_haut">
                
                <div class="avatar"><img src=<?php echo $hero->getAdresse()?>></div>
                <div class="cara_hero">

                    <div class="cara">Force</div><div class="barre_cara"><div class="petite_barre" style="width:<?php echo $force?>%"></div></div>
                    <div class="cara">Intelligence</div><div class="barre_cara"><div class="petite_barre"style="width:<?php echo $intelligence?>%"></div></div>
                    <div class="cara">Endurance</div><div class="barre_cara"><div class="petite_barre"style="width:<?php echo $endurance?>%"></div></div>
                    <div class="cara">Alignement</div><div class="barre_cara"><div class="petite_barre "style="width:<?php echo $alignement?>%"></div></div>

                </div>    

            </div>    

            <div class="resume_hero">
                <div class='nom'><?php echo $nom?></div><?php echo $resume_heros ?>
            
            </div>

        </div>


    </body>
<script>
$(".nom_hero").on('click', function(){
    console.log($(".nom_hero").val());
});
</script>

</html>

