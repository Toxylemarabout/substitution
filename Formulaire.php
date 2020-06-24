<!DOCTYPE html>
<html>
<head>
	<title>Cesi Association</title>
	<!-- CSS only -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  

  <!-- JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>
  <?php
  include("header.php");
  ?>

  <div class="content-wrapper">
    <img src="./img/contact2.jpg" class="img-fluid taille" alt="Responsive image">
  </div>
  
  <div class="container">
    <div class="M-text"><h1><U><B>Contact</B></U></h1></div>
    <div class="text-center mt-4 mb-4">
     <form class="form-contact" action="scriptFormulaire.php" method="post" autocomplete="on">
      <br>
        <label class="label-contact" for="name">Nom :</label>
        <input class="input-contact" type="text" name="nom" required>
      <br>
        <label class="label-contact" for="mail">Email :</label>
        <input class="input-contact" type="email"  placeholder="exemple@exmple.fr" name="email" required>
      <br>
      
        <label class="label-contact" for="msg">Message :</label>
        <textarea class="textarea-formulaire" name="message" placeholder="Ecrivez votre message ici" required></textarea>
      <br>
      <input type="submit" class="btn btn-dark">
    </form>
  </div>
</div>


<?php
include("footer.php");
?>
</body>