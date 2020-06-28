<?php

include 'connexionDB.php';

    if (isset($_POST['nomProduit'])) $nomProduit = $_POST['nomProduit'];
    else      $nomProduit = "";
    if (isset($_POST['description'])) $description = $_POST['description'];
    else      $description = "";
    if (isset($_POST['urlImage'])) $urlImage = $_POST['urlImage'];
    else      $urlImage = "";

        //Sécurité, mais le formulaire est censé empêcher les envois vides
    if (empty($description)) {
        echo '<script> alert("Veuillez entrer une description"); window.location = "./index.php"; </script>';
    }
    else if (empty($nomProduit)) {
        echo '<script> alert("Veuillez entrer un nom de produit"); window.location = "./index.php"; </script>';

      }
    else if (empty($urlImage)) {
        echo '<script> alert("Veuillez entrer une url d\'image"); window.location = "./index.php"; </script>';

      }

       else {

        try {
            $req = $dbh->prepare('SELECT Nom FROM produits WHERE Nom = :nomProduit');
            $req->bindParam(':nomProduit', $nomProduit);
            $req->execute();

            if ($req->fetch()['Nom']== $nomProduit) {
                echo "<script>alert('nom de produit déjà utilisé'); window.location = './gestionProduits.php';</script>";
            } else {
                $req = $dbh->prepare("INSERT INTO produits (Description, Nom, urlImage) VALUES( :description, :nomProduit, :urlImage)");
                $req->bindParam(':description', $description);
                $req->bindParam(':nomProduit', $nomProduit);
                $req->bindParam(':urlImage', $urlImage);
                $req->execute();
                echo "<script>alert('ajout effectué'); window.location = './gestionProduits.php';</script>";
            }
        } catch (Exception $e){
            echo '<script> alert("execution de la requette impossible");</script>';
            die('Erreur : ' . $e->getMessage());
        }
    }

?>
