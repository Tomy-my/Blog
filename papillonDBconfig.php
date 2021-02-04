<!-- <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="icon" href="images/Favicon.jpeg" />
        <META HTTP-EQUIV="Refresh" CONTENT="3;URL=article.php">
    </head>
Article upload ! -->
<?php  
 // Vérifie qu'il provient d'un formulaire
  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //identifiants mysql
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "blogtest";
    
    $nom = $_POST["nom"]; //Le $_POST va aller chercher dans le formulaire "titre"
    $explication = $_POST["explication"];


    //Ouvre une nouvelle connexion au serveur MySQL
    $mysqli = new mysqli($host, $username, $password, $database);
    
    //Affiche les erreurs de connexion
    if ($mysqli->connect_error) {
      die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
    }  
    
    //préparer la requête d'insertion SQL
    $statement = $mysqli->prepare("INSERT INTO papillon (nom, explication) VALUES(?, ?)");
    //Associer les valeurs et exécuter la requête d'insertion
    $statement->bind_param('ss', $nom, $explication); 
    
    if($statement->execute()){
      
    }else{
      print $mysqli->error; 
    }
  }
?>
