<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link href="./img/logo.ico" rel="icon">


    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <title>Cesi Association</title>
</head>

<body>


    <?php include("header.php"); ?>

    <div class="content-wrapper">
        <img src="./img/contact2.jpg" class="img-fluid taille" alt="Responsive image">
    </div>

    <div class="container">

        <div class="M-text"><h1><U><B>Connexion</B></U></h1></div>
        <div class="text-center mt-4 mb-4">
            <form method="post" action="scriptConnexion.php" class="form-connexion" autocomplete="on">

                <div>
                    <label class="label-connexion font-formulaire"><B>Identifiant :  </B></label>
                    <input class="input-connexion" name="identifiant" required="required" type="text" placeholder="Identifant"/>
                </div>
                <div>
                    <label class="label-connexion font-formulaire"><p><B>Password : </B></p></label>
                    <input class="input-connexion" name="password" required="required" type="password" placeholder="Mot de passe" /> 
                </div>
                <div>
                    <input type="submit" class="btn btn-dark" value="Connexion"/> 
                </div>
                <div class="mt-2">
                    Pas encore inscrit ?
                    <a href="http://www.geraldmontet.fr/Formulaire.php" class="to_register"><U>Contactez Nous !</U></a>

                </div>
            </form>

        </div>
    </div>


<div class="container">

        <div class="M-text"><h1><U><B>Connexion</B></U></h1></div>
        <div class="text-center mt-4 mb-4">
            <form method="post" action="scriptConnexion.php" class="form-connexion" autocomplete="on">

                <div>
                    <label class="label-connexion font-formulaire"><B>Identifiant :  </B></label>
                    <input class="input-connexion" name="identifiant" required="required" type="text" placeholder="Identifant"/>
                </div>
                <div>
                    <label class="label-connexion font-formulaire"><p><B>Password : </B></p></label>
                    <input class="input-connexion" name="password" required="required" type="password" placeholder="Mot de passe" /> 
                </div>
                <div>
                    <input type="submit" class="btn btn-dark" value="Connexion"/> 
                </div>
                <div class="mt-2">
                    Pas encore inscrit ?
                    <a href="http://www.geraldmontet.fr/Formulaire.php" class="to_register"><U>Contactez Nous !</U></a>

                </div>
            </form>

        </div>
    </div>



<?php
include("footer.php");
?>
</body>
</html>