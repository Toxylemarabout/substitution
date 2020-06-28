<?php
    session_start();
    
    if (isset($_SESSION['identifiant'])) {
        if (isset($_POST['message'])) {
            $position_arobase = strpos($_POST['email'], '@');
            if ($position_arobase === false)
                echo '<p>Votre email doit comporter un arobase.</p>';
            else {
                $retour = mail('adrien.vandenbossche@viacesi.fr', 'Envoi depuis la page Contact', $_POST['message'], 'From: ' . $_POST['email']);
                if($retour)
                    echo '<p>Votre message a été envoyé.</p>';
                else
                    echo '<p>Erreur.</p>';
            }
        }
    }

    else echo '<script> window.location = "./index.php"; </script>';

    ?>