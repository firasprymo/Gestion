<html>
  <head>
    <title>modification de données en PHP :: partie 1</title>
  </head>
<body>
  <?php
    //connection au serveur:
   require'db.php';
   session_start();
   if ($_SERVER['REQUEST_METHOD']=='GET'){

  $id_cours=$_GET['idcour'];
}
    //requête SQL:
    $sql = "SELECT *
          FROM cours
      ORDER BY nom_cours " ;

    //exécution de la requête:
    $requete = mysqli_query($con, $sql  ) ;

    //affichage des données:
    while( $result = mysqli_fetch_assoc( $requete ) )
    {
      
    header('Content-Type: application/pdf') ;
    header('Content-Disposition: inline') ;
    readfile("img/".$result['fichier']."") ;

    }

    //récupération de la variable d'URL,
    //qui va nous permettre de savoir quel enregistrement supprimer:
    
        echo '<iframe src="' . $result['id'] . '" width="100%" height="100%" >';

    // echo $sql ;
    //exécution de la requête:
    $requete = mysqli_query( $con,$sql  ) ;

    //affichage des résultats, pour savoir si la suppression a marchée:
    if($requete)
    {
      echo("La suppression à été correctement effectuée") ;
      // header("location:cour.php");

    }
    else
    {
      echo("La suppression à échouée") ;
    }
  ?>
