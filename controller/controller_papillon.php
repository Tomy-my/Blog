<?php

include 'config_db.php';
$statusMsg = '';


if (isset($_POST['nom'])) {
    $nom = $_POST['nom'];
}
if (isset($_POST['espece'])) {
    $espece = $_POST['espece'];
}
if (isset($_POST['famille'])) {
    $famille = $_POST['famille'];
}
if (isset($_POST['genre'])) {
    $genre = $_POST['genre'];
}
if (isset($_POST['info'])) {
    $info = $_POST['info'];
}

$targetDir = "../uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            // $insert = $db->query("INSERT into papillons (id, nom, espece, famille, genre, info, file_name, uploaded_on) VALUES ('".$fileName."', NOW())");
            $insert = $db->query("INSERT into papillons (nom, espece, famille, genre, info, file_name, uploaded_on) VALUES ('".$nom."','".$espece."','".$famille."','".$genre."','".$info."','".$fileName."', NOW())");
            if($insert){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Votre image est trop grosse !.";
        }
    }else{
        $statusMsg = 'Désolé, seulement le JPG, JPEG, PNG, GIF, & PDF est accepté.';
    }
}else{
    $statusMsg = 'Veuillez sélectionner une image !.';
}



// Display status message
echo $statusMsg;
?>