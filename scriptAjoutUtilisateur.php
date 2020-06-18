<?php

include 'connexionDB.php';

    if (isset($_POST['identifiant'])) $identifiant = $_POST['identifiant'];
    else      $identifiant = "";
    if (isset($_POST['password'])) $mdp = $_POST['password'];
    else      $mdp = "";
    if (isset($_POST['statutAdmin'])) $statutAdmin = $_POST['statutAdmin'];
    else      $statutAdmin = $_POST['statutAdmin'];

    //Sécurité, mais le formulaire est censé empêcher les envois vides
    if (empty($mdp)) {
        echo '<script> alert("Veuillez entrer un mot de passe");</script>';
    } else if (empty($identifiant)) {
        echo '<script> alert("Veuillez entrer un identifiant");</script>';

    } else {

        try {
            $req = $dbh->prepare('SELECT identifiant FROM utilisateurs WHERE identifiant = :identifiant');
            $req->bindParam(':identifiant', $identifiant);
            $req->execute();

            if ($req->fetch()['identifiant']== $identifiant) {
                echo "<script>alert('identifiant déjà utilisé'); window.location = './ajoutUtilisateur.php';</script>";
            } else {
                $req = $dbh->prepare("INSERT INTO utilisateurs (password, identifiant, statutAdmin) VALUES( :mdp, :identifiant, :statutAdmin)");
                $req->bindParam(':mdp', $mdp);
                $req->bindParam(':identifiant', $identifiant);
                $req->bindParam(':statutAdmin', $statutAdmin);
                $req->execute();
                echo "<script>alert('ajout effectué'); window.location = './ajoutUtilisateur.php';</script>";
            }
        } catch (Exception $e){
            echo '<script> alert("execution de la requette impossible");</script>';
            die('Erreur : ' . $e->getMessage());
        }
    }


?>
