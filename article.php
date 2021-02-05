
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
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/fonts.css" />
        <link rel="stylesheet" href="css/admin.css" />
        <link rel="icon" href="images/favicon.png" />
        <title>Admin</title>
    </head>
        <body>
            
            <div class="navbar">
                <div class="logo"><a href="article.php">TOMY</a> <br> &nbsp  Photographie </div>
                <a href="index.php" class="home">HOME</a>
                <div class="photo">
                    <a href="#" class="photo">PHOTOGRAPHIES</a>
                <div class="liste">
                    <ul>
                    <a href="paysages.php"><li>Paysage</li></a>
                    <a href="#"><li>Papillon</li></a>
                    <a href="#"><li>Voiture</li></a>
                    <a href="#"><li>En création</li></a>
                    <a href="#"><li>En création</li></a>
                    <a href="#"><li>En création</li></a>
                    </ul>
                </div>
                </div>
                <a href="#" class="contact">CONTACT</a>
            </div>

                <div class="container">
                    <div class="mini1">
                        <form method='post' action='deconnexion.php'> <input type='submit' value='Se déconnecter' /> </form>
                        <form method="post" action="controller.php">
                            <input type="text" name="titre" placeholder=" Entrez votre nom" /><br />
                            <input  type="text" name="contenu" placeholder=" blablabla" /><br />
                            <input type="submit" value="Submit" />
                        </form>
                    </div>
                    <div class="mini2">
                        <form action="upload.php" method="post" enctype="multipart/form-data">
                            Select Image File to Upload:
                            <input type="file" name="file">
                            <input type="submit" name="submit" value="Upload">
                        </form>
                    </div>
                    <div class="mini3">
#
                    </div>
                </div>
                <!-- <form method="post" action="papillonDBconfig.php">
                            <input type="text" name="nom" placeholder=" #" /><br />
                            <input  type="text" name="explication" placeholder=" blablabla" /><br />
                            <input type="submit" value="Submit" />
                        </form>
                        </form> -->
<?php
}


