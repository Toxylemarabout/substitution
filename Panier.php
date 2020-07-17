<!DOCTYPE html>
<html>
<head>
	<title>Cesi Association</title>
	<!-- CSS only -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link href="./img/logo.ico" rel="icon">

  <!-- JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>
  <?php
  include("header.php");
  ?>
<?php
  if (isset($_SESSION['statutAdmin'])) {
  echo '

  <div class="container-fluid">

    <div class="row">
      <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">

        <div class="Basket-table">
          <table class="table">
            <thead>
              <tr>
                <th scope="col" class="border-0 bg-light">
                  <div class="p-2 px-3 text-uppercase">Nom du produit</div>
                </th>
                <th scope="col" class="border-0 bg-light">
                  <div class="py-2 text-uppercase">Prix</div>
                </th>
                <th scope="col" class="border-0 bg-light">
                  <div class="py-2 text-uppercase">Quantité</div>
                </th>
                <th scope="col" class="border-0 bg-light">
                  <div class="py-2 text-uppercase">Supprimer</div>
                </th>
              </tr>
            </thead>
            <tbody>

              <tr>
                <th scope="row" class="border-0">
                  <div class="p-2">
                    <img src="http://placehold.it/400x400" alt="" width="70" class="img-fluid rounded"/>
                    <div class="ml-3 d-inline-block align-middle">
                      <h5 class="mb-0"><p
                        class="text-dark d-inline-block align-middle">Nom Produit</a>
                      </h5><span
                      class="text-muted font-weight-normal font-italic d-block">qsdsqdqsdsqqsd</span>
                    </div>
                  </div>
                </th>
                <td class="border-0 align-middle text"><strong>Offert à titre gracieux</strong></td>
                <td class="border-0 align-middle"><strong>qsdqsdsqdsqdsqdsq</strong></td>
                <td class="border-0 align-middle "><button type="button" class="btn btn-danger">Supprimer</button></td>
              </tr>

            </tbody>
          </table>
        </div>

      </div>
    </div>

    <div class="row py-5 p-4 bg-white rounded shadow-sm">
      <div class="col-lg-6">
        <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Information commande</div>
        <div class="p-4">
          <p class="font-italic mb-4">Afin de terminer votre commande, merci de remplir les champs ci-dessous.</p>
          <form name="" action="" method="post">
          <ul class="list-unstyled mb-4">
            <li class="justify-content-between py-3 border-bottom">
              <div class="form-group">
                <label class="font-formulaire"><B>Livraison : </B></label>
                <input class="form-control" name="livraison" type="text" id="livraison" placeholder="Adresse de livraison" size="30">
              </div>
            </li>
            <li class="justify-content-between py-3 border-bottom"><div class="form-group">
              <label class="font-formulaire"><B>Ville : </B></label>
              <input class="form-control" name="livraison" type="text" id="livraison" placeholder="Ville" size="15">
            </div>
          </li>
          <li class="justify-content-between py-3 border-bottom">
           <div class="form-group">
            <label class="font-formulaire"><B>Code Postale : </B></label>
            <input class="form-control" name="livraison" type="number" id="livraison" placeholder="Code Postale" size="5">
          </div>

        </li>
        <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Prix
        Total</strong>
        <h5 class="font-weight-bold">Offert à titre gracieux</h5>
      </li>
    </ul>
 </form>












    <form method="POST" action="">

      <button type="submit" class="btn btn-dark rounded-pill py-2 btn-block">Valider la commande</button>
    </form>

  </div>
</div>
</div>
</div>


<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">
      <div class="Basket-table">
        <table class="table">
          <h1 class="text-center">Votre Panier est vide !</h1>
        </table>
      </div>
    </div>
  </div>

  <div class="row py-5 p-1 bg-white rounded shadow-sm text-center">
    <div class="col-lg-6">
      <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Votre Panier</div>
      <div class="p-4">
        <p class="font-italic mb-4">Des taxes, frais supplémentaires peuvent être ajoutés en fonction de ce que
        vous avez entré.</p>
        <ul class="list-unstyled mb-4">
          <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Frais de
          port</strong><strong>0.00€</strong></li>
          <li class="d-flex justify-content-between py-3 border-bottom"><strong
            class="text-muted">Taxe</strong><strong>0.00€</strong></li>
            <li class="d-flex justify-content-between py-3 border-bottom"><strong
              class="text-muted">Total</strong>
              <h5 class="font-weight-bold">0.00€</h5>
            </li>
          </ul>
          <a href="#" class="btn btn-dark rounded-pill py-2 btn-block">Procéder à l\'achat</a>
        </div>
      </div>
    </div>
  </div>

</div>
';
}

else   {
header("Location: ./index.php");
}
?>






<?php
include("footer.php");
?>
</body>
</html>