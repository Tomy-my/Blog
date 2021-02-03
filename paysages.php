<?php include("header.php"); ?>
        
<body>
    <div class="flex_paysages">
        <div class="boitetexte" data-anim-start="1000" data-anim-duration="500">

 



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

// On récupère les 5 derniers article
$req = $bdd->query('SELECT id, titre, contenu FROM billets ORDER BY contenu DESC LIMIT 0, 5');

while ($donnees = $req->fetch())
{
?>

    <div id="titre">
        <?php echo htmlspecialchars($donnees['titre']); ?>
    </div>
    
    <div id="texte">
    <?php
    // On affiche le contenu de l'article
    echo nl2br(htmlspecialchars($donnees['contenu']));

} // Fin de la boucle des articles
$req->closeCursor();
?>
    </div>
    <a href="https://www.instagram.com/_dakor/"> <img id="insta" src="images/instagram.png"> </a>
        </div>
                <div class="box_photo_cadre">
                    <div id="photo">
<?php
// Include the database configuration file
include 'dbConfig.php';

// Get images from the database
$query = $db->query("SELECT * FROM images ORDER BY uploaded_on DESC");

if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $imageURL = 'uploads/'.$row["file_name"];
?>
    <img src="<?php echo $imageURL; ?>" alt="" />
<?php }
}else{ ?>
    <p>No image(s) found...</p>
<?php } ?>
    
    </div>
        </div>
            </div>
                </div>
    </body>
</html>

