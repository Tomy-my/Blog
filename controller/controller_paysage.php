<?php

include 'config_db.php';
$statusMsg = '';


if (isset($_POST['titre'])) {
    $titre = $_POST['titre'];
}
if (isset($_POST['contenu'])) {
    $contenu = $_POST['contenu'];
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
            $insert = $db->query("INSERT into paysages (titre, contenu, file_name, uploaded_on) VALUES ('".$titre."','".$contenu."','".$fileName."', NOW())");
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