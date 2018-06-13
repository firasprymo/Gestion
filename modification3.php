<?php
  //connection au serveur
  $cnx = mysqli_connect( "localhost", "root", "" ) ;
 
  //sélection de la base de données:
  $db  = mysqli_select_db($cnx, "emplois" ) ;
 if($cnx)
  {
    echo("La modification ") ;
    // header("location:modification1.php");
  }
  else
  {
    echo("La modification à échouée") ;}
  //récupération des valeurs des champs:
  //nom:
  $first_name = isset($_POST['first_name']) ;

  //prenom:
  // $last_name = $_POST["last_name"] ;
    $last_name = isset($_POST['last_name']) ;

  //adresse:
  // $email = $_POST["email"] ;
    $email = isset($_POST['email']) ;

  //code postal:
  // $post        = $_POST["post"] ;
    $post = isset($_POST['post']) ;

  //numéro de téléphone:
    $password = isset($_POST['password']) ;
    $hash = isset($_POST['hash']) ;
    $id = isset($_POST['id']) ;
 
  //création de la requête SQL:
  $sql = "UPDATE `users` SET `first_name`='$first_name',`last_name`='$last_name',`email`='$email',`post`='$post'
           " ;
 
  //exécution de la requête SQL:
  $requete = mysqli_query($cnx,$sql ) or die( mysqli_error($cnx) ) ;
 
 
  //affichage des résultats, pour savoir si la modification a marchée:
  if($requete)
  {
    echo("La modification à été correctement effectuée") ;
    // header("location:modification1.php");
  }
  else
  {
    echo("La modification à échouée") ;
  }
?>