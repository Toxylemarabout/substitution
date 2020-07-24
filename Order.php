<!DOCTYPE html>
<html lang="fr" >
<meta charset="utf-8">
<head>
	<title>Commande</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link href="./img/logo.ico" rel="icon">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>

<body>

	<?php

	include("header.php");
	include("connexionDB.php");

	if (isset($_SESSION['statutAdmin'])) {

	$prd = $dbh->prepare('SELECT Nom FROM produits');
	$prd->execute();
	$rsl = $prd->fetchAll(PDO::FETCH_CLASS);

	echo ' 
	<div class="container-fluid"> 
		<div class="row"> 
			<div class="col-sm-3">
				<div class="card border-0 mt-2">
					<img class="card-img-top" src="./img/commande.png" alt="Card image cap">
					<div class="card-body">
						<p class="card-text text-center"><B><U>Commande</U></B></p>
					</div>
				</div>
			</div>
			<div class="col-sm-2">
				<div class="card border-0 mt-5">
					<img class="card-img-top" src="./img/fleche2.png" alt="Card image cap">
				</div>
			</div>
			<div class="col-sm-2">
				<div class="card border-0">
					<img class="card-img-top" src="./img/livraison2.png" alt="Card image cap">
					<div class="card-body">
						<p class="card-text text-center"><B><U>Livraison</U></B></p>
					</div>
				</div>
			</div>
			<div class="col-sm-2">
				<div class="card border-0 mt-5">
					<img class="card-img-top" src="./img/fleche2.png" alt="Card image cap">
				</div>
			</div>
			<div class="col-sm-3">
				<div class="card border-0 mt-2">
					<img class="card-img-top" src="./img/colis.png" alt="Card image cap">
					<div class="card-body">
						<p class="card-text text-center"><B><U>Reception</U></B></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<form class="form-contact mb-5" name="Commande" action="scriptAjoutPanier.php" method="post">
			<div class="form-group text-center">
				<div class="M-text"><h1><U><B>Ajout au panier</B></U></h1></div>
				<select name="product" id="product-select">
					<option value="">Choisissez un produit :</option>
					';    

					foreach ($rsl as $cle => $val) {
					foreach ($val as $cle2 => $val2) {
					echo  '<option value=' . $val2 . '>' . $val2 .'</option>';
				}
			}

			echo '
		</select>
	</div>

	<div class="form-group">
		<label class="font-formulaire"><B>Choisisez la quantité : </B></label>
		<input class="form-control" name="quantite" type="number" min="1" max="500" id="quantite" placeholder="Quantité" size="30">
		<small class="form-text text-muted">La quantité doit être comprise entre 1 et 500.</small>
	</div>
	<div class="form-group text-center">
		<input class="btn btn-dark" name="envoi" type="submit" value="Valider" id="valider"  onclick="myFunction()">
	</div>

</form>
</div>


';
}

else 	 {
header("Location: ./index.php");
}
?>

<?php
include("footer.php");
?>
</body>
</html>