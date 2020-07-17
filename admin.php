<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8" />
  <title>Page d'administration</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link href="./img/logo.ico" rel="icon">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>

<body>    

  <div id="corps">

    <?php include("header.php");

    if ($_SESSION['statutAdmin'] == 1) 

    { echo ' 
    <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">
      <div class="Basket-table">
        <table class="table">
          <thead>
            <tr>
              <th scope="col" class="border-0 bg-light">
                <div class="p-2 px-3 text-uppercase"><a href="gestionUtilisateur.php">Page de gestion des utilisateurs</a></div>
              </th>
              <th scope="col" class="border-0 bg-light">
                <div class="py-2 text-uppercase"><a href="gestionProduits.php">Page de gestion des produits</a></div>
              </th>
              <th scope="col" class="border-0 bg-light">
                <div class="py-2 text-uppercase"><a href="gestionCommandes.php">Page de visualisation des commandes</a></div>
              </th>
            </tr>
          </thead>
          <tbody>

            <tr>
              <th scope="row" class="border-0">
                <div class="p-2">
                  <div class="text-center mr-5">
                    <div class="mr-5">
                      <a href="gestionUtilisateur.php" class="btn btn-dark">Ici</a>
                    </div>
                  </div>
                </th>
                <td class="border-0 align-middle text">
                  <div class="text-center mr-5">
                    <div class="mr-5">
                      <a href="gestionProduits.php" class="btn btn-dark">Ici</a>
                    </div>
                  </div>
                </td>
                <td class="border-0 align-middle">
                  <div class="text-center mr-5">
                    <div class="mr-5">
                      <a href="gestionCommandes.php" class="btn btn-dark">Ici</a>
                    </div>
                  </div>
                </td>
              </tr>

            </tbody>
          </table>
        </div>

      </div>
    </div>





    ';}

    else { header("Location: ./index.php");}
    ?>

  </div>

</body>

</html>