<!DOCTYPE html>

<html>

    <head>
        <meta charset="utf-8" />
        <title>Visualisation des commandes</title>
        <link href="./img/logo.ico" rel="icon">
    </head>

    <body>    

    <div id="corps">

        <?php include("header.php"); 
        include("connexionDB.php"); 
        if ($_SESSION['statutAdmin'] == 1)  {

	include("buildtable.php");

        $req = $dbh->prepare('SELECT * FROM commandes');
        $req->execute();
        $array = $req->fetchAll(PDO::FETCH_CLASS);

        echo build_table($array);
 
            }
        else { header("Location: ./index.php");}
        ?>
        
    </div>
    
    </body>

</html>