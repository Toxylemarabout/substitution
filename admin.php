<!DOCTYPE html>

<html>

    <head>
        <meta charset="utf-8" />
        <title>Suppression d'utilisateur</title>
    </head>

    <body>    

    <div id="corps">

        <?php include("header.php");

        if ($_SESSION['statutAdmin'] == 1) 
            
            { echo " 

            <a href='ajoutUtilisateur.php'>Page d'ajout d'utilisateurs</a> <br>
            <br>
            <a href='suppressionUtilisateur.php'>Page de suppression d'utilisateurs</a> <br>
            <br>
            <a href='#'>gestion de produits</a> <br>
            <br>
            <a href='#'>visualisation des commandes</a>

            ";}

        else { header("Location: ./index.php");}
        ?>

    </div>
    
    </body>

</html>