<!DOCTYPE html>
<html lang="fr" >
<meta charset="utf-8">

<?php

$message= "Partenaire : ".$_POST['partenaire']."<br> Produit : ".$_POST['product']."<br> Quantité : ".$_POST['quantite']."<br> Adresse de livraison : ".$_POST['livraison']."<br>";
mail('gerald.montet@viacesi.fr', 'Commande', $message);

?>

<?php header('Location: //www.geraldmontet.fr'); ?>