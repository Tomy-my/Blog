<?php $title = "Papillon"; 

 include("header.php"); ?>


<div id="boite_papillon">
<img src="images/01011462_polarr.jpg">
    <div id="info_bulle_G">
        <h2> Lepidoptera </h2>
        <h3> Lorem ipsum bla bla bla </h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque adipisci asperiores 
        minus dolore provident voluptates voluptatum dolorum! Nobis tempora et quam minus similique. 
        Alias a sunt quam laudantium aperiam reiciendis! minus dolore provident voluptates voluptatum dolorum! Nobis tempora et quam minus similique. 
        Alias a sunt quam laudantium aperiam reiciendis!
        minus dolore provident voluptates voluptatum dolorum! Nobis tempora et quam minus similique. 
        </p>
    </div>

<?php
// Connexion à la base de données
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=blogtomy;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// On récupère les 5 derniers article
$req = $bdd->query('SELECT id, nom, espece, famille, genre, info FROM papillons ORDER BY info DESC LIMIT 0, 5');

while ($donnees = $req->fetch())
{
?>

    <div id="info_bulle_D">
        <h3> <?php echo htmlspecialchars($donnees['nom']); ?> </h3>
        <ui>
            <li> Espèce&nbsp;&nbsp;: <?php echo htmlspecialchars($donnees['espece']); ?> </li>
            <li> Famille : <?php echo htmlspecialchars($donnees['famille']); ?> </li>
            <li> Genre&nbsp;&nbsp;&nbsp;: <?php echo htmlspecialchars($donnees['genre']); ?> </li>
            <li> Info&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </li>
        <p> <?php echo htmlspecialchars($donnees['info']); ?> </p>
    </div>
<?php
}
    $req->closeCursor();
?>