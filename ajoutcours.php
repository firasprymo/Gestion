 <?php
  require"db.php";
     if(isset($_POST['valider'])){
//le chemin pour ajouter le fichier
$target_dir = "img/";
$target_file = $target_dir . basename($_FILES["fichier"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

//avoir tous les informations de formulaire

$reference_cours =$_POST['reference_cours'];
$nom_cours =$_POST['nom_cours'];
$nom_matiere =$_POST['nom_matiere'];
// $nom_class =$_POST['nom_class'];
// $nom_enseignant =$_POST['nom_enseignant'];
$fichier =$_FILES['fichier']['name'];
// $imagetmp=addslashes (file_get_contents($_FILES['fichier']['tmp_name']));

$sql3="INSERT INTO `cours`(`reference_cours`, `nom_cours`, `nom_matiere`, `fichier`)
VALUES ('$reference_cours','$nom_cours','$nom_matiere','$fichier')";    
mysqli_query($con,$sql3);
// Allow certain file formats
if($imageFileType != "pdf"  ) {
    echo "Désolé, just les fichiers PDF sont accés.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fichier"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fichier"]["name"]). " has been uploaded.";
        header ("location:cour.php");
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
 }
