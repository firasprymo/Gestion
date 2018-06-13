<?php
// on se connecte à notre mysqli
require('db.php');
session_start();

$nom_enseignant = $_POST['nom_enseignant'];
$sexe = $_POST['sexe'];
$nom_matiere = $_POST['nom_matiere'];

$nom_dep = $_POST['nom_dep'];

 $nom_class = $_POST['nom_class'];
 $CIN = $_POST['CIN'];
 $tel = $_POST['tel'];
 $email = $_POST['email'];
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
('$CIN','$nom_enseignant','$tel','$email','enseignant','$password','$hash')";
$sql1 = "INSERT INTO `ens` (`nom_enseignant`,`sexe`,`role`,`nom_matiere`,`nom_dep`,`nom_class`) VALUES 
('$nom_enseignant','$sexe','enseignant','$nom_matiere','$nom_dep','$nom_class')";

// on insere le tuple (mysql_query) et au cas où, on écrira un petit message d'erreur si la requête ne se passe pas bien (or die)
mysqli_query ($con,$sql) or die ('Erreur SQL ! '.$sql.'<br />'.mysqli_error($con));
mysqli_query ($con,$sql1) or die ('Erreur SQL ! '.$sql1.'<br />'.mysqli_error($con));
 header ("location:admin.php");
}
// on ferme la connexion à la mysqliS
mysqli_close($con);
?>