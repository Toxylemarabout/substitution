<?php

session_start();

if (empty($_SESSION)) {

echo "

<nav class='navbar navbar-expand-lg navbar-light bg-light'>

  <a class='navbar-brand' href='#'>Cesi Association</a>

  <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
    <span class='navbar-toggler-icon'></span>
  </button>

  <div class='collapse navbar-collapse' id='navbarSupportedContent'>
    <ul class='navbar-nav ml-auto'>

    <li class='nav-item active text-left'>
        <a class='nav-link' href='index.php'>Accueil</a>
      </li>

    <li class='nav-item active'>
        <a class='nav-link' href='Nous.php'>A propos<span class='sr-only'>(current)</span></a>
      </li>

      

      <li class='nav-item active text-right'>
        <a class='nav-link' href='pageConnexion.php'>Connexion</a>
      </li>

    </ul>
  </div>

</nav>";

}

else if ($_SESSION['statutAdmin']==1) {

echo "

<nav class='navbar navbar-expand-lg navbar-light bg-light'>

  <a class='navbar-brand' href='#'>Cesi Association</a>

  <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
    <span class='navbar-toggler-icon'></span>
  </button>

  <div class='collapse navbar-collapse' id='navbarSupportedContent'>
    <ul class='navbar-nav ml-auto'>

    <li class='nav-item active'>
        <a class='nav-link' href='Nous.php'> A propos <span class='sr-only'>(current)</span></a>
      </li>

      <li class='nav-item active text-right'>
        <a class='nav-link' href='index.php'>Accueil</a>
      </li>

      <li class='nav-item active text-right'>
        <a class='nav-link' href='Order.php'>Commande</a>
      </li>

      <li class='nav-item active text-right'>
        <a class='nav-link' href='Panier.php'>Panier</a>
      </li>

      <li class='nav-item active text-right'>
        <a class='nav-link' href='admin.php'>Admin</a>
      </li>

      <li class='nav-item active text-right'>
        <a class='nav-link' href='scriptDeconnexion.php'>Déconnexion</a>
      </li>

    </ul>
  </div>

</nav>";

} 

else if ($_SESSION['statutAdmin']==0){

echo "

<nav class='navbar navbar-expand-lg navbar-light bg-light'>

  <a class='navbar-brand' href='#'>Cesi Association</a>

  <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
    <span class='navbar-toggler-icon'></span>
  </button>

  <div class='collapse navbar-collapse' id='navbarSupportedContent'>
    <ul class='navbar-nav ml-auto'>

    <li class='nav-item active'>
        <a class='nav-link' href='Nous.php'> A propos <span class='sr-only'>(current)</span></a>
      </li>

      <li class='nav-item active text-right'>
        <a class='nav-link' href='index.php'>Accueil</a>
      </li>

      <li class='nav-item active text-right'>
        <a class='nav-link' href='Order.php'>Commande</a>
      </li>

      <li class='nav-item active text-right'>
        <a class='nav-link' href='Panier.php'>Panier</a>
      </li>

      <li class='nav-item active text-right'>
        <a class='nav-link' href='scriptDeconnexion.php'>Déconnexion</a>
      </li>

    </ul>
  </div>

</nav>";

} 


?>
