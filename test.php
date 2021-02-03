<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/test.css" />
        <title>Mon blog</title>
    </head>
        
    <body>
        <h1>BLOG</h1>
        <p> Article :</p>
 
<?php
// Connexion à la base de données
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=blogtest;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// On récupère les 5 derniers billets
$req = $bdd->query('SELECT id, titre, contenu FROM billets ORDER BY contenu DESC LIMIT 0, 5');

while ($donnees = $req->fetch())
{
?>
<div class="news">
    <h3>
        <?php echo htmlspecialchars($donnees['titre']); ?>
    </h3>
    
    <p>
    <?php
    // On affiche le contenu du billet
    echo nl2br(htmlspecialchars($donnees['contenu']));

} // Fin de la boucle des billets
$req->closeCursor();
?>
</body>
</html>