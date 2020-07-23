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

        //Sécurité, mais le formulaire est censé empêcher les envois vides
    if (empty($partenaire)) {
        echo '<script> alert("Veuillez entrer un nom d`entreprise "); window.location = \'./Order.php\';</script>';
    }
    else if (empty($product)) {
        echo '<script> alert("Veuillez entrer un produit "); window.location = \'./Order.php\';</script>';
      }
    else if (empty($quantite)) {
        echo '<script> alert("Veuillez entrer une quantité"); window.location = \'./Order.php\';</script>';
      }

       else {
        try{
                $req = $dbh->prepare("SELECT Nom, id_produit FROM produits WHERE Nom = :product");
                $req->bindParam(':product', $product, PDO::PARAM_STR);
                $req->execute();
                $result = $req->fetch(PDO::FETCH_NUM);
                $id = $result[1] - 1 ;

                #ajout d'un produit
                
                $_SESSION['panier'][$id] = $product;
                if (!isset($_SESSION['quantite'][$id])) {$_SESSION['quantite'][$id] = 0;}
                    $_SESSION['quantite'][$id] = $quantite + $_SESSION['quantite'][$id];

                echo $_SESSION['panier'][$id];
                print '          ';
                echo $_SESSION['quantite'][$id];

        } catch (Exception $e){
            echo '<script> alert("execution de la requette impossible");</script>';
            die('Erreur : ' . $e->getMessage());
        }
    }

?>