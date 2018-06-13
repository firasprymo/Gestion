<?php
// on se connecte à notre mysqli
require('db.php');
session_start();

 nom:
  $jour = $_POST['jour'] ;
  $dat_debut = $_POST['dat_debut'] ;

  // $dat_fin = $_POST["dat_fin"] ;
  $nom_matiere = $_POST["nom_matiere"] ;
  $nom_dep = $_POST["nom_dep"] ;
  
  $nom_salle = $_POST["nom_salle"] ;
  $nom_enseignant = $_POST["nom_enseignant"] ;
  $semaine = $_POST["semaine"] ;
  
    $id_seance = $_POST['id_seance'] ;

// lancement de la requete
$result = $con->query("SELECT * FROM seance WHERE dat_debut='$dat_debut' AND jour='$jour' And semaine='$semaine' and nom_matiere='$nom_matiere' and nom_enseignant='$nom_enseignant'") or die($con->error());

// We know user email exists if the rows returned are more than 0
if ( $result->num_rows > 0 ) {
    
    $_SESSION['message'] = 'Cette séance déja existe!';
    header("location: errorutil.php");
    
} else {
$sql = "INSERT INTO `seance` (`jour`,`dat_debut`, `nom_dep`,`nom_matiere`, `nom_enseignant`, `nom_salle`, `semaine`) VALUES 
('$jour','$dat_debut','$nom_dep','$nom_matiere','$nom_enseignant','$nom_salle','$semaine')";

// on insere le tuple (mysql_query) et au cas où, on écrira un petit message d'erreur si la requête ne se passe pas bien (or die)
mysqli_query ($con,$sql) or die ('Erreur SQL ! '.$sql.'<br />'.mysqli_error($con));
 header ("location:seance.php");
}
// on ferme la connexion à la mysqliS
mysqli_close($con);
?>
 