<?php
// on se connecte à notre base
$base = mysqli_connect ('localhost', 'root','','emplois');

?>
<html>
<head>
<title>Nom et tél des membres</title>
</head>
<body>
<?php
// lancement de la requête (on impose aucune condition puisque l'on désire obtenir la liste complète des propriétaires
$sql = 'SELECT * FROM matiere';

// on lance la requête (mysqli_query) et on impose un message d'erreur si la requête ne se passe pas bien (or die)
$req = mysqli_query($base,$sql) or die();

// on va scanner tous les tuples un par un
while ($data = mysqli_fetch_array($req)) {
    // on affiche les résultats
    echo 'Nom : '.$data['nom_matiere'].'<br />';
    echo 'Son tél : '.$data['id_matiere'].'<br /><br />';
}
mysqli_free_result ($req);
mysqli_close ($base);
?>
</body>
</html>