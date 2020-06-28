<!DOCTYPE html>
<html lang="fr" >
<meta charset="utf-8">
<head>
	<title>Commande</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link href="./img/logo.ico" rel="icon">
	<link rel="stylesheet" type="text/css" href="css/Order.cs">
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
		<div class="col-sm-4">
		<div class="card border-0 mt-5">
		<img class="card-img-top" src="./img/école.png" alt="Card image cap">
		</div>
		</div>
		<form name="Commande" action="mail.php" method="post">

		<select name="product" id="product-select">
		<option value="">Choisissez un produit :</option>
		';    

		foreach ($rsl as $cle => $val) {
			foreach ($val as $cle2 => $val2) {
				echo  '<option value=' . $val2 . '>' . $val2 .'</option>';
			}
		}

		echo ' <option value="Sur-mesure">Produit sur mesure</option>

		<input name="quantite" type="text" id="quantite" placeholder="Quantité" size="30">

		<input name="livraison" type="text" id="livraison" placeholder="Adresse de livraison" size="30">

		<input name="envoi" type="submit" value="Valider" id="valider"  onclick="myFunction()">

		</select>
		</form>
		</div>
		</div>
		<section class="d-flex flex-column sticky-bottom">
		<div id="sticky-footer" class="py-4 bg-dark text-white-50">
		<footer class="container text-center">
		<small>Copyright &copy; 2020 http://geraldmontet.fr</small>
		<small><a href="http://www.geraldmontet.fr/Mention.php">Mentions Legales</a></small>
		</footer>
		</div>
		</section>


		<script>
		function myFunction() {
			alert("Votre commande a été effectuée");
		}
		</script>';

	}

	else 	 {
		header("Location: ./index.php");
	}



	?>

</body>
</html>
