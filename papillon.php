<?php $title = "Papillon"; 

 include("header.php"); ?>
<div id="info_bulle_G">
    <h2> Papillon </h2>
    <h3> Les Lépidoptères</h3>
    <p>
        sont un ordre d'insectes holométaboles dont la forme adulte (ou imago) 
        est communément appelée papillon, dont la larve est appelée chenille, et la nymphe chrysalide.
        <br><br>
        C'est un réél défi de réussir à les prendres en photo, même quand nous sommes dans une serre à papillons ou des centaines vole autour de toi. 
        Il faut être patient et attendre le bon moment au bon endroit pour réussir à faire le plus beau cliché !
    </p> 
 </div>
<?php
        include './controller/config_db.php';
        
        $query = $db->query("SELECT id, nom, espece, famille, genre, info, file_name FROM papillons ORDER BY uploaded_on DESC");

        while($row = $query->fetch_assoc()){
            $imageURL = 'uploads/'.$row["file_name"];
    ?>

<div id="boite_papillon">
    <div id="cadre_papillon"> 
        <img src="<?php echo $imageURL; ?>" alt="" />
    </div>


    <div id="info_bulle_D">
        <h3> <?php echo htmlspecialchars($row['nom']); ?> </h3>
        <ui>
            <li> Espèce&nbsp;&nbsp;: <?php echo htmlspecialchars($row['espece']); ?> </li>
            <li> Famille : <?php echo htmlspecialchars($row['famille']); ?> </li>
            <li> Genre&nbsp;&nbsp;&nbsp;: <?php echo htmlspecialchars($row['genre']); ?> </li>
            <li> Info&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </li>
        </ui>
        <p> <?php echo htmlspecialchars($row['info']); ?> </p>
    </div>
</div>
<?php 
    }
?>