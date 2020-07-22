<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8" />
    <title>Ajout d'utilisateur</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link href="./img/logo.ico" rel="icon">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>

<body>    

    <div id="corps">

        <?php include("header.php"); 
        include("connexionDB.php"); 
        if ($_SESSION['statutAdmin'] == 1) 
        { echo '         

                               

    </div>
 
<div class="container">

    <div class="M-text text-center"><h1><U><B>Inscritpion</B></U></h1></div>
    <div class="text-center mt-4 mb-4">
        <form method="post" action="scriptAjoutUtilisateur.php" class="form-connexion" autocomplete="on">

            <div>
                <label class="label-connexion font-formulaire" for="username" class="uname" data-icon="u" ><B>Identifiant : </B></label>
                <input class="input-connexion" id="username" name="identifiant" required="required" type="text" minlength="2" required pattern="([A-z0-9À-ž\s]){2,}" />
            </div>
            <div>
                <label class="label-connexion font-formulaire" for="password" class="youpasswd" data-icon="p"><B>Password : </B></label>
                <input class="input-connexion" id="password" name="password" required="required" type="password" minlength="4"/> 
            </div>
            <div>
                <label class="label-connexion font-formulaire" for="password" class="youpasswd" data-icon="p"><B>Password : </B></label>
                <input class="input-connexion" id="password" id="confirm_password" name="password" required="required" type="password" minlength="4" /> 
            </div>
            <div>
                <label for="statutAdmin">Statut administrateur</label>

                <select name="statutAdmin" id="statutAdmin" >
                    <option value="0">Non</option>
                    <option value="1">Oui</option>
                </select> 
            </div>
            <div>
                <input type="submit" class="btn btn-dark" value="Inscrire"/> 
            </div>
            
        </form>

    </div>
    <div class="M-text text-center"><h1><U><B>Utilisateur a supprimer :</B></U></h1></div>
    <div class="text-center mt-4 mb-4">
        <form method="post" action="scriptSuppressionUtilisateur.php" class="form-connexion" autocomplete="on">
            <div> 
                <label class="label-connexion font-formulaire" for="username" class="uname" data-icon="u"><B>Nom : </B></label>
                <input class="input-connexion" id="username" name="identifiant" required="required" type="text" minlength="2" required pattern="([A-z0-9À-ž\s]){2,}" />
            </div>
            <div>
                <input type="submit" class="btn btn-dark" value="Supprimer"/>
            </div>






        </div>';

        include ("buildtable.php");

        $req = $dbh->prepare('SELECT id, identifiant, statutAdmin FROM utilisateurs');
        $req->execute();
        $array = $req->fetchAll(PDO::FETCH_CLASS);

        echo build_table($array);

    }
    else { header("Location: ./index.php");}
    ?>

</div>

</body>

</html>