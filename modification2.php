<html>
  <head>
    <title>modification de données en PHP :: partie2</title>
  </head>
<body>
  <?php
  require("modification1.php");
  //connection au serveur:
  $cnx = mysqli_connect( "localhost", "root", "" ) ;
 
  //sélection de la base de données:
  $db = mysqli_select_db( $cnx,"emplois" ) ;
 
  //récupération de la variable d'URL,
  //qui va nous permettre de savoir quel enregistrement modifier
  $id  = $_GET["idPersonne"] ;
  //requête SQL:
  $sql = "SELECT *
            FROM users
	    WHERE id = '$id'" ;
 
  //exécution de la requête:
  $requete = mysqli_query(  $cnx,$sql ) ;
 
  //affichage des données:
  if( $result = mysqli_fetch_object( $requete ) )
  {
  ?>
<form name="insertion" action="modification3.php" method="POST">
  <input type="hidden" name="id" value="<?php echo($id) ;?>">
  <table border="0" align="center" cellspacing="2" cellpadding="2">
    <tr align="center">
      <td>nom</td>
      <td><input type="text" name="first_name" value="<?php echo($result->first_name) ;?>"></td>
    </tr>
    <tr align="center">
      <td>prenom</td>
      <td><input type="text" name="last_name" value="<?php echo($result->last_name) ;?>"></td>
    </tr>
    <tr align="center">
      <td>adresse</td>
      <td><input type="text" name="email" value="<?php echo($result->email) ;?>"></td>
    </tr>
    <tr align="center">
      <td>code postal</td>
      <td><input type="text" name="post" value="<?php echo($result->post) ;?>"></td>
    </tr>
    <tr align="center">
      <td>numéro de téléphone</td>
      <td><input type="text" name="password" value="<?php echo($result->password) ;?>"></td>
    </tr>
    <tr align="center">
      <td colspan="2"><input type="submit" value="modifier"></td>
    </tr>
  </table>
</form>
  <?php
  }//fin if 
  ?>
</body>
</html>