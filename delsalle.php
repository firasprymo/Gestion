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
	      FROM salle
	      ORDER BY nom_salle" ;

    //exécution de la requête:
    $requete = mysqli_query($con, $sql  ) ;

    //affichage des données:
    while( $result = mysqli_fetch_assoc( $requete ) )
    {
       echo(" <a href=\"delsalle.php?idsalle=".$result['id_salle']."\">supprimer</a></div>\n"
       ) ;
    }

    //récupération de la variable d'URL,
    //qui va nous permettre de savoir quel enregistrement supprimer:
    $id_salle  = $_GET["idsalle"] ;

    //requête SQL:
    $sql = "DELETE
              FROM salle
  	    WHERE id_salle = $id_salle" ;
    // echo $sql ;
    //exécution de la requête:
    $requete = mysqli_query( $con,$sql  ) ;

    //affichage des résultats, pour savoir si la suppression a marchée:
    if($requete)
    {
      echo("La suppression à été correctement effectuée") ;
      header("location:salle.php");

    }
    else
    {
      echo("La suppression à échouée") ;
    }
  ?>
