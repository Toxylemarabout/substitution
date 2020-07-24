<?php

session_start();
#retirer un article

if (isset($_POST['suppr'])){

$j = $_POST['suppr'];
unset($_SESSION['panier'][$j]);
unset($_SESSION['quantite'][$j]);

}

header('Location: ./panier.php')

?> 
