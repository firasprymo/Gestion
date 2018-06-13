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

  // $first_name = isset($_POST['first_name']) ;
  $nom_dep = $_POST['nom_dep'] ;
 
    $chef_departement = $_POST['chef_departement'] ;
    $nom_class = $_POST['nom_class'] ;
    $nom_enseignant = $_POST['nom_enseignant'] ;
    $id_dep = $_POST['id_dep'] ;

  //création de la requête SQL:
  $sql = "UPDATE `departement` SET `nom_dep`='$nom_dep',`chef_departement`='$chef_departement',`nom_class`='$nom_class',`nom_enseignant`='$nom_enseignant' where id_dep='$id_dep'
           " ;
 // echo $sql;
  //exécution de la requête SQL:
  $requete = mysqli_query($con,$sql ) or die( mysqli_error($con) ) ;


  //affichage des résultats, pour savoir si la modification a marchée:
  if($requete)
  {
    echo "La modification à été correctement effectuée".mysqli_affected_rows($con);
      header("location:departement.php");
  }
  else
  {
    echo("La modification à échouée") ;
  }
?>
