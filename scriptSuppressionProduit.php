<?php


include 'connexionDB.php';

    if (isset($_POST['nomProduit'])) $nomProduit = $_POST['nomProduit'];
    else      $nomProduit = "";

    if (empty($nomProduit)) {
        echo '<script> alert("Veuillez entrer un nom de produit");</script>';
        }

    else {

        try {

            $req = $dbh->prepare('SELECT Nom FROM produits WHERE Nom = :nomProduit');
            $req->bindParam(':nomProduit', $nomProduit);
            $req->execute();

            if ($req->fetch()['Nom']!= $nomProduit) {
                echo "<script>alert('cet produit n\'existe pas'); window.location = './gestionProduits.php';</script>";
            } 

            else {
                $req = $dbh->prepare("DELETE FROM produits WHERE Nom = :nomProduit");
                $req->bindParam(':nomProduit', $nomProduit);
                $req->execute();
                echo "<script>alert('suppression effectuée'); window.location = './gestionProduits.php';</script>";
                    }
            }
         catch (Exception $e){
            echo '<script> alert("execution de la requette impossible");</script>';
            die('Erreur : ' . $e->getMessage());
        }
    }

?>