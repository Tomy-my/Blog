<?php $title = "Paysage"; 

include("header.php"); ?>
        
<body>
    <div class="flex_paysages">
        <div class="boitetexte" data-anim-start="1000" data-anim-duration="500">

            <div id="titre">
                Paysage
            </div>
    
            <div id="texte">
            Voici une compilation de mes plus beaux clichés photographiques de paysage au alentour de chez moi.<br><br>
            La plupart du temps, j'aime prendre le ciel et le soleil en photo, chaque jour une nouvelle teinte de couleur envahi le ciel, je trouve ca si magnifique, 
            cela me procure un sentiment de liberté.<br>
            Pourtant, j'emprisonne cette liberté dans mes clichés à jamais !
            </div>

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
                <?php
                 }
                ?>
    
            </div>
        </div>
    </div>
</body>
</html>

