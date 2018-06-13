<html>
  <head>
    <title>modification de données en PHP :: partie 1</title>
  </head>
<body>
  <?php
    //connection au serveur:
   require'db.php';
   session_start();
    //requête SQL:
    $sql = "SELECT *
	      FROM matiere
	      ORDER BY class" ;

    //exécution de la requête:
    $requete = mysqli_query($con, $sql  ) ;

    //affichage des données:
    while( $result = mysqli_fetch_assoc( $requete ) )
    {
       echo(" <a href=\"delmatiere.php?idmat=".$result['id_matiere']."\">supprimer</a></div>\n"
       ) ;
    }

    //récupération de la variable d'URL,
    //qui va nous permettre de savoir quel enregistrement supprimer:
    $id_matiere  = $_GET["idmat"] ;

    //requête SQL:
    $sql = "DELETE
              FROM matiere
  	    WHERE id_matiere = ".$id_matiere ;
    // echo $sql ;
    //exécution de la requête:
    $requete = mysqli_query( $con,$sql  ) ;

    //affichage des résultats, pour savoir si la suppression a marchée:
    if($requete)
    {
      echo("La suppression à été correctement effectuée") ;
      header("location:matiere.php");

    }
    else
    {
      echo("La suppression à échouée") ;
    }
  ?>
