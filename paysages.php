<?php $title = "Paysage"; 

include("header.php"); ?>
        
<body>
    <div class="flex_paysages">
        <div class="boitetexte" data-anim-start="1000" data-anim-duration="500">
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

            $req = $bdd->query('SELECT id, titre, contenu FROM paysages ORDER BY contenu DESC LIMIT 0, 9');

            while ($donnees = $req->fetch())
            {
            ?>

            <div id="titre">
                <?php echo htmlspecialchars($donnees['titre']); ?>
            </div>
    
            <div id="texte">
                <?php echo nl2br(htmlspecialchars($donnees['contenu'])); ?>
            </div>
            <?php
            } 
            $req->closeCursor();
            ?>
            <a href="https://www.instagram.com/_dakor/"> <img id="insta" src="images/instagram.png"> </a>
        </div>
        <div class="box_photo_cadre">
            <div id="photo">
                <?php
                // Include the database configuration file
                include './controller/config_db.php';

                // Get images from the database
                $query = $db->query("SELECT file_name FROM paysages ORDER BY uploaded_on DESC");


                while($row = $query->fetch_assoc()){
                    $imageURL = 'uploads/'.$row["file_name"];
                ?>
                <img src="<?php echo $imageURL; ?>" alt="" />
                <?php }
                ?>
    
            </div>
        </div>
    </div>
</body>
</html>

