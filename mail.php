<?php
include 'connexionDB.php' ;
session_start();
//mail

//$message= "Partenaire : ".$_POST['partenaire']." Produit : ".$_POST['product']." ; Quantité : ".$_POST['quantite']." ; Adresse de livraison : ".$_POST['livraison'];
//mail('gerald.montet@viacesi.fr', 'Commande' $_POST['partenaire'] , $message);

//envoi a la BDD

    if (isset($_SESSION['identifiant'])) $partenaire = $_SESSION['identifiant'];
    else      $partenaire = "";
    if (isset($_POST['product'])) $product = $_POST['product'];
    else      $product = "";
    if (isset($_POST['quantite'])) $quantite = $_POST['quantite'];
    else      $quantite = "";
    if (isset($_POST['numRue']) && isset($_POST['Ville']) && isset($_POST['Code'])) $livraison = $_POST['numRue'] . ", " . $_POST['Ville'] . "  " . $_POST['Code'];
    else      $livraison = "";    

        //Sécurité, mais le formulaire est censé empêcher les envois vides
    if (empty($partenaire)) {
        echo '<script> alert("Veuillez entrer un nom d`entreprise "); window.location = \'./panier.php\';</script>';
    }
    else if (empty($product)) {
        echo '<script> alert("Veuillez sélectionner un produit "); window.location = \'./panier.php\';</script>';
      }
    else if (empty($quantite)) {
        echo '<script> alert("Veuillez entrer une quantité"); window.location = \'./Order.php\';</script>';
      }
    else if (empty($livraison)) {
        echo '<script> alert("Veuillez entrer une adresse de livraison"); window.location = \'./Order.php\';</script>';
      }

       else {
        try{###############################################################################################################################################################
                $req = $dbh->prepare("INSERT INTO commandes (utilisateur, produit, quantite, adresseLivraison, id_produit, ID) SELECT identifiant, Nom, :quantite, :livraison, id_produit, ID FROM produits JOIN utilisateurs ON 1 WHERE identifiant = :partenaire AND Nom = :product LIMIT 1");
                $req->bindParam(':partenaire', $partenaire, PDO::PARAM_STR);
                $req->bindParam(':product', $product, PDO::PARAM_STR);
                $req->bindParam(':quantite', $quantite, PDO::PARAM_INT);
                $req->bindParam(':livraison', $livraison, PDO::PARAM_STR);                
                $req->execute();
                echo "<script> alert('votre commande a été effectuée') window.location = './index.php';</script>";
            ###############################################################################################################################################################
            
        } catch (Exception $e){
            echo '<script> alert("execution de la requette impossible");</script>';
            die('Erreur : ' . $e->getMessage());
        }
    }

?>