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
  $CIN = $_POST['CIN'] ;
  $first_name = $_POST['first_name'] ;

  //prenom:
  $last_name = $_POST["last_name"] ;
  $tel = $_POST["tel"] ;
    // $last_name = isset($_POST['last_name']) ;

  //adresse:
  $email = $_POST["email"] ;
    // $email = isset($_POST['email']) ;

  //code postal:
  // $post= $_POST['post'] ;
    // $post = isset($_POST['post']) ;

  //numéro de téléphone:
    // $password = isset($_POST['password']) ;
    // $hash = isset($_POST['hash']) ;
    $id = $_POST['id'] ;

  //création de la requête SQL:
  $sql = "UPDATE `users` SET `CIN`='$CIN',`first_name`='$first_name',
  `last_name`='$last_name',`tel`='$tel',`email`='$email' where id='$id'
           " ;
 // echo $sql;
  //exécution de la requête SQL:
  $requete = mysqli_query($con,$sql ) or die( mysqli_error($con) ) ;


  //affichage des résultats, pour savoir si la modification a marchée:
  if($requete)
  {
    echo "La modification à été correctement effectuée".mysqli_affected_rows($con);
     header("location:admin.php");
  }
  else
  {
    echo("La modification à échouée") ;
  }
?>
