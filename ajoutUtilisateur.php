<!DOCTYPE html>

<html>

    <head>
        <meta charset="utf-8" />
        <title>Ajout d'utilisateur</title>
        <link href="./img/logo.ico" rel="icon">
    </head>

    <body>    

    <div id="corps">

        <?php include("header.php"); 
        if ($_SESSION['statutAdmin'] == 1) 
            { echo '         

        <div class="container">
            
            <section>               

                <div id="container" >

                    <div id="wrapper">


                        
                                <div id="login" class="animate form">
                                <form method="post" action="scriptAjoutUtilisateur.php" autocomplete="on">
                                    <h1>Inscription</h1> 
                                    <p> 
                                        <label for="username" class="uname" data-icon="u" > Identifiant : </label>
                                        <input id="username" name="identifiant" required="required" type="text" minlength="2" required pattern="([A-z0-9À-ž\s]){2,}" />
                                    </p>
                                    <p> 
                                        <label for="password" class="youpasswd" data-icon="p"> Mot de passe : </label>
                                        <input id="password" name="password" required="required" type="password" minlength="4"/> 
                                    </p>
                                        <label for="password" class="youpasswd" data-icon="p"> Confirmation du mot de passe : </label>
                                        <input id="confirm_password" name="password" required="required" type="password" minlength="4" /> 
                                    <p>

                                    <label for="statutAdmin">Statut administrateur</label>

                                    <select name="statutAdmin" id="statutAdmin" >
                                         <option value="0">Non</option>
                                         <option value="1">Oui</option>
                                     </select> 

                                    </p>

                                    <p class="login button"> 
                                        <input type="submit" value="Inscire"/> 
                                    </p>

                                </form>
                             </div>
                        
                    </div>
                </div>  
            </section>
        </div> ';
 
            }
        else { header("Location: ./index.php");}
        ?>
        
    </div>
    
    </body>

</html>