<?php
include 'connexionDB.php' ;

//mail
$message= "Partenaire : ".$_POST['partenaire']." Produit : ".$_POST['product']." ; Quantité : ".$_POST['quantite']." ; Adresse de livraison : ".$_POST['livraison'];
mail('gerald.montet@viacesi.fr', 'Commande' $_POST['partenaire'] , $message);

//envoi a la BDD

    if (isset($_POST['partenaire'])) $partenaire = $_POST['partenaire'];
    else      $partenaire = "";
    if (isset($_POST['product'])) $product = $_POST['product'];
    else      $product = "";
    if (isset($_POST['quantite'])) $quantite = $_POST['quantite'];
    else      $quantite = "";
    if (isset($_POST['livraison'])) $livraison = $_POST['livraison'];
    else      $livraison = "";    

        //Sécurité, mais le formulaire est censé empêcher les envois vides
    if (empty($partenaire)) {
        echo '<script> alert("Veuillez entrer un nom d`entreprise ");</script>';
    }
    else if (empty($product)) {
        echo '<script> alert("Veuillez entrer un produit ");</script>';
      }
    else if (empty($quantite)) {
        echo '<script> alert("Veuillez entrer une quantité");</script>';

    else if (empty($livraison)) {
        echo '<script> alert("Veuillez entrer une adresse de livraison");</script>';
      }

       else {

                $req = $dbh->prepare("INSERT INTO commandes (utilisateur, produit, quantite, adresseLivraison, id_produit, ID) SELECT identifiant, Nom, :quantite, :livraison, id_produit, ID FROM produits JOIN utilisateurs ON 1 WHERE identifiant = :partenaire AND Nom = :product");
                $req->bindParam(':partenaire', $partenaire);
                $req->bindParam(':product', $product);
                $req->bindParam(':quantite', $quantite);
                $req->bindParam(':livraison', $livraison);                
                $req->execute();
                echo "<script> window.location = './index.php';</script>";
            }
        } catch (Exception $e){
            echo '<script> alert("execution de la requette impossible");</script>';
            die('Erreur : ' . $e->getMessage());
        }
    }


?>