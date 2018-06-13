<?php
  //connection au serveur
 require'db.php';
 session_start();
 if($con)
  {
    echo("La modification ") ;
    // header("location:modification1.php");
  }
  else
  {
    echo("La modification à échouée") ;}
  //récupération des valeurs des champs:
  // nom:
  // $nom_class = isset($_POST['first_name']) ;
  $nom_matiere = $_POST['nom_matiere'] ;
  $nom_class = $_POST['nom_class'] ;

  //prenom:
  $nombredheure = $_POST["nombredheure"] ;
  $nombredeseance = $_POST["nombredeseance"] ;
    // $nombredheure = isset($_POST['nombredheure']) ;

  //adresse:
  $coef = $_POST["coef"] ;
  $nom_enseignant = $_POST["nom_enseignant"] ;
    // $coef = isset($_POST['coef']) ;

  //code postal:
  // $post= $_POST['post'] ;
    // $post = isset($_POST['post']) ;

  //numéro de téléphone:
    // $password = isset($_POST['password']) ;
    // $hash = isset($_POST['hash']) ;
    $id_matiere = $_POST['id_matiere'] ;

  //création de la requête SQL:
  $sql = "UPDATE `matiere` SET `nom_matiere`='$nom_matiere',`nom_class`='$nom_class',
  `nombredheure`='$nombredheure',`nombredeseance`='$nombredeseance',`coef`='$coef',`nom_enseignant`='$nom_enseignant' where id_matiere='$id_matiere'
           " ;
 // echo $sql;
  //exécution de la requête SQL:
  $requete = mysqli_query($con,$sql ) or die( mysqli_error($con) ) ;


  //affichage des résultats, pour savoir si la modification a marchée:
  if($requete)
  {
    echo "La modification à été correctement effectuée".mysqli_affected_rows($con);
     header("location:matiere.php");
  }
  else
  {
    echo("La modification à échouée") ;
  }
?>
