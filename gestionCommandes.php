<!DOCTYPE html>

<html>

    <head>
        <meta charset="utf-8" />
        <title>Visualisation des commandes</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link href="./img/logo.ico" rel="icon">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
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