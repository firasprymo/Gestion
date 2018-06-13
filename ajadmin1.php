<?php
// on se connecte à notre mysqli
require('db.php');
session_start();

$nom_admin = $_POST['nom_admin'];
$email_admin = $_POST['email_admin'];
$CIN = $_POST['CIN_admin'];

$tel = $_POST['tel'];

 $post = $_POST['post'];
// $password = isset($_POST['password']) ? $_POST['password'] : "";
// $hash = isset($_POST['hash']) ? $_POST['hash'] : "";

 $password = $con->escape_string(password_hash($_POST['mdp_admin'], PASSWORD_BCRYPT));
 $hash = $con->escape_string( md5( rand(0,1000) ) );
// $nom_class = $_POST['nom_class'];


// lancement de la requete
$result = $con->query("SELECT * FROM users WHERE id='$id'") or die($con->error());

// We know user email exists if the rows returned are more than 0
if ( $result->num_rows > 0 ) {
    
    $_SESSION['message'] = 'Cette département déja existe!';
    header("location: errorutil.php");
    
} else {
$sql = "INSERT INTO `users` (`CIN`,`first_name`,`tel`,`email`,`post`,`password`,`hash`) VALUES 
('$CIN','$nom_admin','$tel','$email_admin','admin','$password','$hash')";
$sql1 = "INSERT INTO `admin` (`nom_admin`,`email_admin`,`mdp_admin`,`hash_admin`,`CIN_admin`) VALUES 
('$nom_admin','$email_admin','$password','$hash','$CIN')";

// on insere le tuple (mysql_query) et au cas où, on écrira un petit message d'erreur si la requête ne se passe pas bien (or die)
mysqli_query ($con,$sql) or die ('Erreur SQL ! '.$sql.'<br />'.mysqli_error($con));
mysqli_query ($con,$sql1) or die ('Erreur SQL ! '.$sql1.'<br />'.mysqli_error($con));
header ("location:admin.php");
}
// on ferme la connexion à la mysqliS
mysqli_close($con);
?>