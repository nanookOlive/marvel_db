<!DOCTYPE html>

<html>

<head>
    <meta charset='utf-8'>
    <link rel='stylesheet' href='styles_add.css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Marvel&display=swap" rel="stylesheet">
    <title>Admin</title>

</head>

<body>

 <!--                   banniere  et menu                        -->


    <div class='banniere'>

        <h1>Marvel Database | Admin</h1>
        <div class='menu'>
            
            <div class='cat_menu' id='ajouter_heros'>Ajouter un héros</div>
            <div class='cat_menu' id='supprimer_heros'>Supprimer un héros</div>
            <div class='cat_menu' id='modifier_heros'>Modifier un héros</div>
        </div>
    </div>

    <div id="add_heros">

        <form id='formu' method='POST' action='add.php'>

            <h2 id="titre_1">Ajouter un héros</h2>

            <label for='nom'>Nom</label>
            <input type='text' id='nom' name='nom' required>

            <label for='id-secrete'>Identité secrête</label>
            <input type='text' id='id_secrete' name='id_secrete' required>

            <label for='alignement'>Alignement</label>
            <input type='text' id='alignement' name='alignement' required placeholder='entre 1 et 100'>

            <label for='force'>Force</label>
            <input type='text' id='force' name='force' required placeholder='entre 1 et 100'>

            <label for='intelligence'>Intelligence</label>
            <input type='text' id='intelligence' name='intelligence' required placeholder='entre 1 et 100'>

            <label for='endurance'>Endurance</label>
            <input type='text' id='endurance' name='endurance'required placeholder='entre 1 et 100'>

            <label for='avatar'>Avatar</label>
            <input type='text' id='avatar' name='avatar' required placeholder="adresse http">

            <label for='resume_heros'>Bio</label>
            <textarea id='resume_heros' name='resume_heros' rows='5' maxlength='1000' required placeholder="taille max 5000 cara"></textarea>

            <button id='boubou' name='bouton' type='submit'>Envoyer</button>
        </form>
    </div>

    <div id='supp_heros'>

        <form id="remove_hero" method='POST' action='remove_heros.php'>
            
            <h2>Supprimer un héros</h2>
            <select name='nom_send'>

                <?php 

                    require_once('connection.php');
                    $tabi=$con->prepare('select nom_heros from heros'); 
                    $tabi->execute();
                    $tab=$tabi->fetchAll();

                    foreach($tab as $nom){
                        $res=$nom['nom_heros'];
                        echo "<option values='$res'>$res</option>";
                    }

                    require_once('close.php');
                ?>

            </select>

            <button type='submit'>Supprimer</button>
        </form>
    </div>


    <div id='update_heros'>

                    
          <h2>Modifier un héros</h2>          

        <form id="form_update_hero" method="POST" action="affiche_update_heros.php">
                <select name="nom_change">
                  <?php 
                     foreach($tab as $nom){
                        $res=$nom['nom_heros'];
                        echo "<option values='$res'>$res</option>";
                    }
                      
                  ?>

            </select>
            <button type='submit'>Modifier</button>

        </form>

    </div>

    <script src='./script.js'></script>



</body>

</html>
