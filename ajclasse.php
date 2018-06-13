<?php
// on se connecte à notre mysqli
require('db.php');
session_start();

$n = isset($_POST['enseignant']) ? $_POST['enseignant'] : "";
$e = isset($_POST['departement	']) ? $_POST['departement	'] : "";


// $password = isset($_POST['password']) ? $_POST['password'] : "";
// $hash = isset($_POST['hash']) ? $_POST['hash'] : "";

 //$password = $mysqli->escape_string(password_hash($_POST['password'], PASSWORD_BCRYPT));
 //$hash = $mysqli->escape_string( md5( rand(0,1000) ) );
// $nombredheure = isset($_POST['nombredheure']) ? $_POST['nombredheure'] : "";
// $nombredheure = isset($_POST['nombredheure']) ? $_POST['nombredheure'] : "";
// $nombredeseance = isset($_POST['nombredeseance']) ? $_POST['nombredeseance'] : "";
// $coef = isset($_POST['coef']) ? $_POST['coef'] : "";

// lancement de la requete
$result = $mysqli->query("SELECT * FROM classe WHERE nom='$n'") or die($mysqli->error());

// We know user email exists if the rows returned are more than 0
if ( $result->num_rows > 0 ) {
    
    $_SESSION['message'] = ' ce classe  est déja existe!';
    header("location: errorutil.php");
    
} else {
$sql = "INSERT INTO `classe` (`enseignant`, `departement`) VALUES 
('$n','$e')";

// on insere le tuple (mysql_query) et au cas où, on écrira un petit message d'erreur si la requête ne se passe pas bien (or die)
mysqli_query ($mysqli,$sql) or die ('Erreur SQL ! '.$sql.'<br />'.mysqli_error($mysqli));
header ("location:admin.php");}
// on ferme la connexion à la mysqliS
mysqli_close($mysqli);
?>
