
<?php
session_start();
 
if (isset($_POST['password'])) { #si la variable mot de passe existe
    if ($_POST['password'] == 'root') {
        $_SESSION['connecte'] = true;
    }
    else {
        $_SESSION['connecte'] = false;
        echo "mot de passe incorrect";
    }
    
}
 
 
if (!isset($_SESSION['connecte']) or $_SESSION['connecte'] == false) { # on vérifie que l'utilisateur ne soit pas connecté
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/login.css" />
        <link rel="icon" href="images/favicon.png" />
    </head>
    <body>
            <div class="wrapper fadeInDown">
                <div id="formContent">
                    <form action="article.php" method="post">
                        <input type="password" id="password" class="fadeIn third" name="password" placeholder="Mot de passe">
                        <input type="submit" class="fadeIn fourth" value="Connexion">
                  </form>
                </div>
              </div>
    </body>
</html>
<?php
 
}
 
else { # Dans cette partie, on écrit le code que l'utilisateur administrateur verras

?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/fonts.css" />
        <link rel="stylesheet" href="css/styles.css" />
        <link rel="stylesheet" href="css/resolutions.css" />
        <link rel="icon" href="images/favicon.png" />
        <title>Tomy : Admin</title>
    </head>
        <body>
            
            <div class="navbar">
                <div class="logo">
                    <a href="article.php">
                        <div id="T">T</div>
                        <div id="O">O</div>
                        <div id="M">M</div>
                        <div id="Y">Y</div></a> <br> &nbsp;  
                        <div id="pho">Photographie</div>
                </div>
                <a href="index.php" class="home">HOME</a>
                <div class="photo">
                    <a href="#" class="photo">PHOTOGRAPHIES</a>
                        <div class="liste">
                            <ul>
                                <a href="paysages.php"><li>Paysage</li></a>
                                <a href="papillon.php"><li>Papillon</li></a>
                                <a href="voiture.php"><li>Voiture</li></a>
                                <a href="#"><li>En création</li></a>
                            </ul>
                        </div>
                </div>
                    <a href="#" class="contact">CONTACT</a>
            </div>


                <div class="container">
                    <div class="paysage_admin">
                        <form method='post' action='./controller/controller_deco.php'>
                            <input type='submit' value='Se déconnecter' /> 
                        </form>
                        <span><br>page paysage<br><br></span>
                            <form action="./controller/controller_paysage.php" method="post" enctype="multipart/form-data">
                                <input type="file" name="file">
                                <button type="submit" name="submit" value="Upload">Upload !</button>
                            </form> 

                          <span>Yo Julie, je te laisse upload des photos et tester le reste  </Span>




                        </div>
                    <div class="papillon_admin">
                        <form action="./controller/controller_papillon.php" method="post" enctype="multipart/form-data">
                            <div class="nom_papi">
                                <input type="text" placeholder="Nom du papillon" name="nom">
                            </div>
                            <div class="espece_papi">
                                <input type="text" placeholder="L'espece du papillon" name="espece">
                            </div>
                            <div class="famille_papi">
                                <input type="text" placeholder="La famille du papillon" name="famille">
                            </div>
                            <div class="genre_papi">
                                <input type="text" placeholder="Le genre du papillon" name="genre">
                            </div>
                            <div class="info_papi">
                                <input type="text" placeholder="Quelque information.." name="info">
                            </div>
                            <div class="file_papi">
                                <input type="file" name="file">
                            </div>
                            <div class="envoyer_papi">
                                <button type="submit" name="submit" value="Upload">Submit</button>
                            </div>
                        </form>
                    </div>
                <div class="voiture_admin">
                    #
                </div>
            </div>
<?php
}





