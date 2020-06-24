<!DOCTYPE html>

 <html>

 <head>
    <meta charset="utf-8" />

    <title>Connexion</title>
</head>

<body>
  

    <?php include("header.php"); ?>

    <div id="corps">

        <div class="container">


            <section>               
                <div id="container" >

                            <div id="wrapper">
                            <!-- login-->
                                <div id="login" class="animate form">
                                <form method="post" action="scriptConnexion.php" autocomplete="on">
                                    <h1>Connexion</h1> 
                                    <p> 
                                        <label for="username" class="uname" data-icon="u" > identifiant : </label>
                                        <input id="username" name="identifiant" required="required" type="text" required pattern="([A-z0-9À-ž\s]){2,}"/>
                                    </p>
                                    <p> 
                                        <label for="password" class="youpasswd" data-icon="p"> Mot de passe : </label>
                                        <input id="password" name="password" required="required" type="password"  /> 
                                    </p>

                                    <p class="login button"> 
                                        <input type="submit" value="Connexion" /> 
                                    </p>
                                    
                                </form>
                             </div>

                        
                    </div>
                </div>  
            </section>
        </div>

        
    </div>
    
</body>

</html>