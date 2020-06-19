<?php


include 'connexionDB.php';

    if (isset($_POST['identifiant'])) $identifiant = $_POST['identifiant'];
    else      $identifiant = "";

    if (empty($identifiant)) {
        echo '<script> alert("Veuillez entrer un identifiant");</script>';
        }

    else {

        try {

            $req = $dbh->prepare('SELECT identifiant FROM utilisateurs WHERE identifiant = :identifiant');
            $req->bindParam(':identifiant', $identifiant);
            $req->execute();

            if ($req->fetch()['identifiant']!= $identifiant) {
                echo "<script>alert('cet utilisateur n\'existe pas'); window.location = './gestionUtilisateur.php';</script>";
            } 

            else {
                $req = $dbh->prepare("DELETE FROM utilisateurs WHERE identifiant = :identifiant");
                $req->bindParam(':identifiant', $identifiant);
                $req->execute();
                echo "<script>alert('suppression effectuée'); window.location = './gestionUtilisateur.php';</script>";
                    }
            }
         catch (Exception $e){
            echo '<script> alert("execution de la requette impossible");</script>';
            die('Erreur : ' . $e->getMessage());
        }
    }

?>