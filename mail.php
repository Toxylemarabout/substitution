<?php
include 'connexionDB.php' ;

//mail
$message= "Partenaire : ".$_POST['partenaire']." Produit : ".$_POST['product']." ; Quantité : ".$_POST['quantite']." ; Adresse de livraison : ".$_POST['livraison'];
mail('gerald.montet@viacesi.fr', 'Commande' $_POST['partenaire'] , $message);

//envoi a la BDD


?>

<?php header('Location: //www.geraldmontet.fr'); ?>