<!DOCTYPE html>
<html lang="fr" >
<meta charset="utf-8">

<?php

$message= "Partenaire : ".$_POST['partenaire']." Produit : ".$_POST['product']." ; Quantité : ".$_POST['quantite']." ; Adresse de livraison : ".$_POST['livraison'];


mail('gerald.montet@viacesi.fr', 'Commande' $_POST['partenaire'] , $message);


?>

<?php header('Location: //www.geraldmontet.fr'); ?>