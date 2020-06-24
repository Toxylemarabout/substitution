<!DOCTYPE html>

<html>

    <head>
        <meta charset="utf-8" />
        <title>Gestion de produits</title>
    </head>

    <body>    

    <div id="corps">

        <?php include("header.php"); 
        include("connexionDB.php"); 
        if ($_SESSION['statutAdmin'] == 1) 
            { echo '  

        <div class="container">
            
            <section>               

                <div id="container" >

                    <div id="wrapper">
                                
                                <div id="ajoutProduit" class="animate form">
                                <form method="post" action="scriptAjoutProduit.php" autocomplete="on">

                                    <h1>Ajout de produit</h1> 
                                
                                    <p> 
                                        <label for="nomProduit" class="nomProduit"> Nom du produit : </label>
                                        <input id="nomProduit" name="nomProduit" required="required" type="text" minlength="2"/>
                                    </p>
                                 
                                    <p> 
                                        <label for="description" class="descLabel"> Description : </label>
                                    </p>

                                    <p> 
                                        <input id="description" name="description" required="required" type="description" minlength="4"/> 
                                    </p>

                                    <p> 
                                        <label for="urlImage" class="url"> Url de l\'image : </label>
                                        <input id="urlImage" name="urlImage" required="required" type="text" minlength="2"/>
                                    </p>

                                    <p class="bouton d\'envoi"> 
                                        <input type="submit" value="Ajouter"/> 
                                    </p>

                                </form>
                             </div>


                             <div id="ajoutProduit" class="animate form">
                                <form method="post" action="scriptSuppressionProduit.php" autocomplete="on">
                                
                                    <h1>Nom du produit a supprimer :</h1> 
                                
                                    <p> 
                                        <label for="nomProduit" class="nomProduit">  </label>
                                        <input id="nomProduit" name="nomProduit" required="required" type="text" minlength="2"/>
                                    </p>

                                    <p class="bouton d\'envoi"> 
                                        <input type="submit" value="Supprimer"/> 
                                    </p>

                                </form>
                             </div>                             
                        
                    </div>
                </div>  
            </section>
        </div>

            ';
 
            include("buildtable.php");

            $req = $dbh->prepare('SELECT * FROM produits');
            $req->execute();
            $array = $req->fetchAll(PDO::FETCH_CLASS);

            echo build_table($array);
 
            }
        else { header("Location: ./index.php");}
        ?>
        
    </div>
    
    </body>

</html>