<?php
require_once('class_hero.php');
$heros=new hero();
$hero_update=$heros->creation($_POST["nom_change"])
?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href='./styles_update.css'>
        <title>Modifier un héros</title>
        
    </head>
<body>

    

    <div id='up_heros'>
    <form id='formulaire' method='POST' action='update_heros.php'>

            <h2 id="titre_1">Modifier un héros</h2>

            <label for='nom'>Nom</label>
            <input type='text' id='nom' name='nom' value='<?php echo $hero_update ->getNom();?>' readonly>

            <label for='id-secrete'>Identité secrête</label>
            <input type='text' id='id_secrete' name='id_secrete' value='<?php echo $hero_update ->getId_secrete();?>' required>

            <label for='alignement'>Alignement</label>
            <input type='text' id='alignement' name='alignement' value='<?php echo $hero_update ->getAlignement();?>' required>

            <label for='force'>Force</label>
            <input type='text' id='force' name='force' value='<?php echo $hero_update ->getForce();?>' required>

            <label for='intelligence'>Intelligence</label>
            <input type='text' id='intelligence' name='intelligence' value='<?php echo $hero_update ->getIntelligence();?>' required>

            <label for='endurance'>Endurance</label>
            <input type='text' id='endurance' name='endurance'value='<?php echo $hero_update ->getEndurance();?>' required>

            <label for='avatar'>Avatar</label>
            <input type='text' id='avatar' name='avatar' value='<?php echo $hero_update ->getAdresse();?>' required>

            <label for='resume_heros'>Bio</label>
            <textarea id='resume_heros' name='resume_heros' rows='5' maxlength='1000' required><?php echo $hero_update ->getResume();?></textarea>

            <button id='boubou' name='bouton' type='submit'>Envoyer</button>
        </form>
    </div>
</body>
</html>