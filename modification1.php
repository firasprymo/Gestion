<html>
  <head>
    <title>modification de données en PHP :: partie 1</title>
  </head>
<body>
  <?php
    //connection au serveur:
    $cnx = mysqli_connect( "localhost", "root", "" ) ;
 
    //sélection de la base de données:
    $db = mysqli_select_db( $cnx,"emplois" ) ;
 
    //requête SQL:
    $sql = "SELECT *
	      FROM users
	      ORDER BY first_name" ;
 
    //exécution de la requête:
    $requete = mysqli_query(  $cnx,$sql ) ;
 
    //affichage des données:
    while( $result = mysqli_fetch_object( $requete ) )
    {
       echo(
           "<div align=\"center\">"
           .$result->first_name." ".$result->last_name
           ." <a href=\"modification2.php?idPersonne=".$result->id."\">modifier</a></div>\n"
       ) ;
    }
  ?>
</body>
</html>