<!DOCTYPE html>

<html>

    <head>
        <meta charset="utf-8" />
        <title>Page d'administration</title>
    </head>

    <body>    

    <div id="corps">

        <?php include("header.php");

        if ($_SESSION['statutAdmin'] == 1) 
            
            { echo " 

            <a href='gestionUtilisateur.php'>Page de gestion des utilisateurs</a> <br>
            <br>
            <a href='gestionProduits.php'>Page de gestion des produits</a> <br>
            <br>
            <a href='#'>visualisation des commandes</a>

            ";}

        else { header("Location: ./index.php");}
        ?>

    </div>
    
    </body>

</html>