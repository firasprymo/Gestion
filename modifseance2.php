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
  $jour = $_POST['jour'] ;
  $dat_debut = $_POST['dat_debut'] ;

  $nom_dep = $_POST["nom_dep"] ;
  $nom_matiere = $_POST["nom_matiere"] ;
  
  $nom_enseignant = $_POST["nom_enseignant"] ;
  $nom_salle = $_POST["nom_salle"] ;
  $semaine = $_POST["semaine"] ;
   
    $id_seance = $_POST['id_seance'] ;

  //création de la requête SQL:
  $sql = "UPDATE `seance` SET `jour`='$jour',`dat_debut`='$dat_debut',`nom_dep`='$nom_dep',
  `nom_matiere`='$nom_matiere',`nom_enseignant`='$nom_enseignant',`nom_salle`='$nom_salle',`semaine`='$semaine' where id_seance='$id_seance'
           " ;
 // echo $sql;
  //exécution de la requête SQL:
  $requete = mysqli_query($con,$sql ) or die( mysqli_error($con) ) ;


  //affichage des résultats, pour savoir si la modification a marchée:
  if($requete)
  {
    echo "La modification à été correctement effectuée".mysqli_affected_rows($con);
     header("location:seance.php");
  }
  else
  {
    echo("La modification à échouée") ;
  }
?>
