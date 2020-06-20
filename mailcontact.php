<!DOCTYPE html>
<html lang="fr" >
<meta charset="utf-8">

<?php

$message= $_POST['demande'];


mail('gerald.montet@viacesi.fr', 'Contact de' . $_POST['nom'] , $message);


?>
