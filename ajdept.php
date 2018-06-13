<?php
// on se connecte à notre mysqli
require('db.php');
session_start();
$id_dep = $_POST['id_dep'];
$nom_dep = $_POST['nom_dep'];
$chef_departement = $_POST['chef_departement'];
$nom_class = $_POST['nom_class'];
$nom_enseignant = $_POST['nom_enseignant'];



// lancement de la requete
$result = $con->query("SELECT * FROM departement where `id_dep`=
	'$id_dep'") or die($con->error());

// We know user email exists if the rows returned are more than 0
if ( $result->num_rows > 0 ) {
    
    $_SESSION['message'] = 'Cette département déja existe!';
    header("location: errordept.php");
    
} else {
$sql = "INSERT INTO `departement` (`nom_dep`,`chef_departement`,`nom_class`,`nom_enseignant`) VALUES 
('$nom_dep','$chef_departement','$nom_class','$nom_enseignant')";
// $sql1 = "INSERT INTO `ens` (`prenom`) VALUES 
// ('$nom_enseignant')";
$sql2 = "INSERT INTO `class` (`nom_class`) VALUES 
('$nom_class')";

// on insere le tuple (mysql_query) et au cas où, on écrira un petit message d'erreur si la requête ne se passe pas bien (or die)
mysqli_query ($con,$sql) or die ('Erreur SQL ! '.$sql.'<br />'.mysqli_error($con));
// mysqli_query ($con,$sql1) or die ('Erreur SQL ! '.$sql1.'<br />'.mysqli_error($con));
mysqli_query ($con,$sql2) or die ('Erreur SQL ! '.$sql2.'<br />'.mysqli_error($con));
 header ("location:departement.php");
}
// on ferme la connexion à la mysqliS
mysqli_close($con);
?>
