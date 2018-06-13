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
  nom:
  // $first_name = isset($_POST['first_name']) ;
  $nom_salle = $_POST['nom_salle'] ;
 
    $id_salle = $_POST['id_salle'] ;

  //création de la requête SQL:
  $sql = "UPDATE `salle` SET `nom_salle`='$nom_salle' where id_salle='$id_salle'
           " ;
 // echo $sql;
  //exécution de la requête SQL:
  $requete = mysqli_query($con,$sql ) or die( mysqli_error($con) ) ;


  //affichage des résultats, pour savoir si la modification a marchée:
  if($requete)
  {
    echo "La modification à été correctement effectuée".mysqli_affected_rows($con);
     header("location:salle.php");
  }
  else
  {
    echo("La modification à échouée") ;
  }
?>
