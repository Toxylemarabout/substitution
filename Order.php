<!DOCTYPE html>
<html lang="fr" >
<meta charset="utf-8">
<head>
	<title>Commande</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="Order.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>

<body>
<?php
include("header.php");
?>

<?php
include("footer.php");
?>

<form name="Commande" action="mail.php" method="post">
<input name="partenaire" type="text" id="partenaire" placeholder="Nom de la société" size="30">

<select name="product" id="product-select">
	<option value="">Choisissez un produit :</option>
	<option value="Cle-de-maniement-sans-contact">Clé de maniement sans contact</option>
	<option value="Sur-mesure">Produit sur mesure</option>

<input name="quantite" type="text" id="quantite" placeholder="Quantité" size="30">

<input name="livraison" type="text" id="livraison" placeholder="Adresse de livraison" size="30">

<input name="envoi" type="submit" value="Valider" id="valider"  onclick="myFunction()">

</select>
</form>
<script>
function myFunction() {
  alert("Votre commande a été effectué");
}
</script>


</body>