<?php
  //connection au serveur
  $cnx = mysqli_connect( "localhost", "root", "" ) ;
 
  //sélection de la base de données:
  $db  = mysqli_select_db( $cnx,"emplois" ) ;
 
  //récupération des valeurs des champs:
  //nom:
  // $first_name     = $_POST["first_name"] ;
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
 
  //création de la requête SQL:
  $sql = "INSERT  INTO users (first_name, last_name, email, post,password,hash)
            VALUES ( '$first_name', '$last_name', '$email', '$post','$password','$hash') " ;
 
  //exécution de la requête SQL:
  $requete = mysqli_query($cnx,$sql ) or die( mysqli_error($cnx) ) ;
 
  //affichage des résultats, pour savoir si l'insertion a marchée:
  if($requete)
  {
    echo("L'insertion a été correctement effectuée") ;
    header("location:insertion1.php");
  }
  else
  {
    echo("L'insertion à échouée") ;
  }
?>