
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
                    <a href="contact.php" class="contact">CONTACT</a>
            </div>


                <div class="container">
                    <div class="paysage_admin">
                        <form method='post' action='./controller/controller_deco.php'>
                            <input type='submit' value='Se déconnecter' /> 
                        </form>
                            <div class="title">Paysage</div>
                            <div class="subtitle">Veuillez sélectionner une image à upload</div>
                        <form action="./controller/controller_paysage.php" method="post" enctype="multipart/form-data">
                            <input type="file" class="file_papi" name="file">
                            <button type="submit" class="upload" name="submit" value="Upload">Upload !</button>
                        </form> 
                    </div>
                    <div class="form">
                        <form action="./controller/controller_papillon.php" method="post" enctype="multipart/form-data">                       
                            <div class="title">Papillon</div>
                            <div class="subtitle">Veuillez entrer les caractéristiques du papillon</div>
                            <div class="input-container ic1">
                                <input id="firstname" class="input" type="text" placeholder=" " name="nom" />
                            <div class="cut"></div>
                                <label for="firstname" class="placeholder">Nom</label>
                            </div>
                            <div class="input-container ic2">
                                <input id="lastname" class="input" type="text" placeholder=" " name="espece"/>
                            <div class="cut"></div>
                                <label for="lastname" class="placeholder">Espèce</label>
                            </div>
                            <div class="input-container ic2">
                                <input id="lastname" class="input" type="text" placeholder=" " name="famille"/>
                                <div class="cut"></div>
                                <label for="lastname" class="placeholder">Famille</label>
                            </div>
                            <div class="input-container ic2">
                                <input id="lastname" class="input" type="text" placeholder=" " name="genre"/>
                            <div class="cut"></div>
                                <label for="lastname" class="placeholder">Genre</label>
                            </div>
                            <div class="input-container ic2">
                                <input id="lastname" class="input" type="text" placeholder=" " name="info"/>
                            <div class="cut"></div>
                                <label for="lastname" class="placeholder">Information</label>
                            </div>
                            <div class="file_papi">
                                <input type="file" name="file">
                            </div>
                            <button type="text" class="submit" name="submit">Envoyer les données !</button>
                        </form>
                    </div>
                    <div class="voiture_admin">
                    #
                    </div>
                </div>

<?php
}





