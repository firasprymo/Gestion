<?php
// on se connecte à notre mysqli
require('db.php');
session_start();

$nom_matiere = $_POST['nom_matiere'];

$nombredheure = $_POST['nombredheure'];
$nombredeseance = $_POST['nombredeseance'];
$coef = $_POST['coef'];
$nom_enseignant = $_POST['nom_enseignant'];
$nom_class = $_POST['nom_class'];
// $password = isset($_POST['password']) ? $_POST['password'] : "";
// $hash = isset($_POST['hash']) ? $_POST['hash'] : "";

 // $password = $con->escape_string(password_hash($_POST['password'], PASSWORD_BCRYPT));
 // $hash = $con->escape_string( md5( rand(0,1000) ) );
// $nombredheure = isset($_POST['nombredheure']) ? $_POST['nombredheure'] : "";
// $nombredheure = isset($_POST['nombredheure']) ? $_POST['nombredheure'] : "";
// $nombredeseance = isset($_POST['nombredeseance']) ? $_POST['nombredeseance'] : "";
// $coef = isset($_POST['coef']) ? $_POST['coef'] : "";

// lancement de la requete
$result = $con->query("SELECT * FROM matiere WHERE nom_matiere='$nom_matiere' ") or die($con->error());

// We know user coef exists if the rows returned are more than 0
if ( $result->num_rows > 0 ) {

	$_SESSION['message'] = 'L utilisateur avec cette coef déja existe!';
	header("location: errorutil.php");

} else {
	$sql = "INSERT INTO `matiere` (`nom_matiere`,`nom_class`,`nombredheure`,`nombredeseance`, `coef`, `nom_enseignant`) VALUES 
	('$nom_matiere','$nom_class','$nombredheure','$nombredeseance','$coef','$nom_enseignant')";

// on insere le tuple (mysql_query) et au cas où, on écrira un petit message d'erreur si la requête ne se passe pas bien (or die)
	mysqli_query ($con,$sql) or die ('Erreur SQL ! '.$sql.'<br />'.mysqli_error($con));

 header ("location:matiere.php");}
// on ferme la connexion à la mysqliS
mysqli_close($con);
?>
