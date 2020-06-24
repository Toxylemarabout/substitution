<?php

  include 'connexionDB.php';

try {
    if (isset($_POST['identifiant'])) $identifiant = $_POST['identifiant'];
    else      $identifiant = "";
    if (isset($_POST['password'])) $mdp = $_POST['password'];
    else      $mdp = "";

    $req = $dbh->prepare('SELECT password, identifiant, id, statutAdmin FROM utilisateurs WHERE identifiant = :identifiant');
    $req->bindParam(':identifiant', $identifiant);
    $req->execute();
    $login = $req->fetch(PDO::FETCH_ASSOC);

    if ($login['identifiant'] == $identifiant AND $login['password'] == $mdp){
        $admin = $login['statutAdmin'];
        session_start();
        echo '<script>alert("connexion réussie")</script>';
        $_SESSION['identifiant'] = $identifiant;
        $_SESSION['statutAdmin'] = $admin;
        header('Location: index.php');
    } else {

echo "<script>alert('Identifiant ou mot de passe incorrect'); window.location = './pageConnexion.php';</script>";
    }
} catch (Exception $e){
    echo '<script> alert("execution de la requette impossible");</script>';
    die('Erreur : ' . $e->getMessage());
}




?>
