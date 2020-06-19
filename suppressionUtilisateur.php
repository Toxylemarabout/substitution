<!DOCTYPE html>

<html>

    <head>
        <meta charset="utf-8" />
        <title>Suppression d'utilisateur</title>
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


                        
                                <div id="login" class="animate form">
                                <form method="post" action="scriptSuppressionUtilisateur.php" autocomplete="on">
                                    <h1>Utilisateur a supprimer :</h1> 
                                    <p> 
                                        <label for="username" class="uname" data-icon="u" >  </label>
                                        <input id="username" name="identifiant" required="required" type="text" minlength="2" required pattern="([A-z0-9À-ž\s]){2,}" />
                                    </p>

                                </form>
                             </div>
                        
                    </div>
                </div>  
            </section>
        </div> ';


                                            ///// table credit : GhostInTheSecureShell ; stackOverflow  ////
    function build_table($array){
    // start table
    $html = '<table>';
    // header row
    $html .= '<tr>';
    foreach($array[0] as $key=>$value){
            $html .= '<th>' . htmlspecialchars($key) . '</th>';
        }
    $html .= '</tr>';

    // data rows
    foreach( $array as $key=>$value){
        $html .= '<tr>';
        foreach($value as $key2=>$value2){
            $html .= '<td>' . htmlspecialchars($value2) . '</td>';
        }
        $html .= '</tr>';
    }

    // finish table and return it

    $html .= '</table>';
    return $html;
}

$req = $dbh->prepare('SELECT id, identifiant, statutAdmin FROM utilisateurs');
$req->execute();
$array = $req->fetchAll(PDO::FETCH_CLASS);

echo build_table($array);


 
            }
        else { header("Location: ./index.php");}
        ?>
        
    </div>
    
    </body>

</html>