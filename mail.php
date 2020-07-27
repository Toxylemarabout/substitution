<?php
include 'connexionDB.php' ;
session_start();
//mail

//$message= "Partenaire : ".$_POST['partenaire']." Produit : ".$_POST['product']." ; Quantité : ".$_POST['quantite']." ; Adresse de livraison : ".$_POST['livraison'];
//mail('gerald.montet@viacesi.fr', 'Commande' $_POST['partenaire'] , $message);

//envoi a la BDD

    if (isset($_SESSION['identifiant'])) $partenaire = $_SESSION['identifiant'];
    else      $partenaire = "";
 
    if (isset($_POST['numRue']) && isset($_POST['Ville']) && isset($_POST['Code'])) $livraison = $_POST['numRue'] . ", " . $_POST['Ville'] . "  " . $_POST['Code'];
    else      $livraison = "";    

        //Sécurité, mais le formulaire est censé empêcher les envois vides
    if (empty($partenaire)) {
        echo '<script> alert("Veuillez entrer un nom d`entreprise "); window.location = \'./panier.php\';</script>';
    }

    else if (empty($livraison)) {
        echo '<script> alert("Veuillez entrer une adresse de livraison"); window.location = \'./Order.php\';</script>';
      }

       else {
        try{###############################################################################################################################################################
                
                $cmd = $dbh->prepare("INSERT INTO `commandes`(`utilisateur`, `adresseLivraison`, `ID`) SELECT identifiant, :livraison, ID FROM utilisateurs WHERE identifiant = :partenaire");
                $cmd->bindParam(':partenaire', $partenaire, PDO::PARAM_STR);
                $cmd->bindParam(':livraison', $livraison, PDO::PARAM_STR);
                $cmd->execute();

                foreach ($_SESSION['panier'] as $i => $value) {
                
                    $cnt = $dbh->prepare("INSERT INTO `contient`(`id_commande`, `id_produit`, `quantite`) SELECT id_commande, id_produit, :quantite FROM commandes JOIN produits ON 1 WHERE Nom = :product ORDER BY id_commande DESC LIMIT 1");
                    $cnt->bindParam(':product', $_SESSION['panier'][$i], PDO::PARAM_STR);
                    $cnt->bindParam(':quantite', $_SESSION['quantite'][$i], PDO::PARAM_INT);
                    $cnt->execute();
                    
                    //echo "INSERT INTO `contient`(`id_commande`, `id_produit`, `quantite`) SELECT id_commande, id_produit, ". $_SESSION['quantite'][$i]. " FROM commandes JOIN produits ON 1 WHERE Nom = ". $_SESSION['product'][$i] . " ORDER BY id_commande DESC LIMIT 1";
                    }

                unset($_SESSION['panier']);
                unset($_SESSION['quantite']);

                header('Location: ./panier.php');
            ###############################################################################################################################################################
            
        } catch (Exception $e){
            echo '<script> alert("execution de la requette impossible");</script>';
            die('Erreur : ' . $e->getMessage());
        }
    }

?>