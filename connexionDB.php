 <?php

 $dbUser = 'root';
 $dbPass = '';
 
 try {
 	$dbh = new PDO('mysql:host=localhost;dbname=structure', $dbUser, $dbPass/*, array(PDO::ATTR_PERSISTENT => true)*/);
 	} 
  catch (PDOException $e) {
 	print "Erreur de connexion à la base de données!: " . $e->getMessage() . "<br/>";
 	die();
    }

?> 
