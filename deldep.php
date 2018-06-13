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
        FROM departement
        ORDER BY nom_dep" ;

    //exécution de la requête:
    $requete = mysqli_query($con, $sql  ) ;

    //affichage des données:
    while( $result = mysqli_fetch_assoc( $requete ) )
    {
       echo(" <a href=\"deldep.php?iddep=".$result['id_dep']."\">supprimer</a></div>\n"
       ) ;
    }

    //récupération de la variable d'URL,
    //qui va nous permettre de savoir quel enregistrement supprimer:
    $id_dep  = $_GET["iddep"] ;

    //requête SQL:
    $sql = "DELETE
              FROM departement
        WHERE id_dep = $id_dep" ;
    // echo $sql ;
    //exécution de la requête:
    $requete = mysqli_query( $con,$sql  ) ;

    //affichage des résultats, pour savoir si la suppression a marchée:
    if($requete)
    {
      echo("La suppression à été correctement effectuée") ;
      header("location:departement.php");

    }
    else
    {
      echo("La suppression à échouée") ;
    }
  ?>
