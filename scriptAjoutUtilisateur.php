<?php

include 'connexionDB.php';
include 'encryption.php';

    if (isset($_POST['identifiant'])) $identifiant = $_POST['identifiant'];
    else      $identifiant = "";
    if (isset($_POST['password'])) $mdp = cryptageHash($_POST['password']);
    else      $mdp = "";
    if (isset($_POST['statutAdmin'])) $statutAdmin = $_POST['statutAdmin'];
    else      $statutAdmin = 0;

        //Sécurité, mais le formulaire est censé empêcher les envois vides
    if (empty($mdp)) {
        echo '<script> alert("Veuillez entrer un mot de passe"); window.location = "./index.php"; </script>';
    } else if (empty($identifiant)) {
        echo '<script> alert("Veuillez entrer un identifiant"); window.location = "./index.php"; </script>';

      } else {

        try {
            $req = $dbh->prepare('SELECT identifiant FROM utilisateurs WHERE identifiant = :identifiant');
                $req->bindParam(':identifiant', $identifiant);
            $req->execute();

            if ($req->fetch()['identifiant']== $identifiant) {
                echo "<script>alert('identifiant déjà utilisé'); window.location = './gestionUtilisateur.php';</script>";
            } else {
                $req = $dbh->prepare("INSERT INTO utilisateurs (password, identifiant, statutAdmin) VALUES( :mdp, :identifiant, :statutAdmin)");
                $req->bindParam(':mdp', $mdp);
                $req->bindParam(':identifiant', $identifiant);
                $req->bindParam(':statutAdmin', $statutAdmin);
                $req->execute();
                echo "<script>alert('ajout effectué'); window.location = './gestionUtilisateur.php';</script>";
            }
        } catch (Exception $e){
            echo '<script> alert("execution de la requette impossible");</script>';
            die('Erreur : ' . $e->getMessage());
        }
    }

?>
