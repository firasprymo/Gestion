<?php
/* Displays all error messages */
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Error</title>
  <?php include 'css/css.html'; ?>
</head>
<body>
<div class="form">
    <h1>Error</h1>
    <p>
    <?php 
    if( isset($_SESSION['message']) AND !empty($_SESSION['message']) ): 
        echo "Salle déja existe";    
    else:
        header( "location: admin.php" );
    endif;
    ?>
    </p>     
    <a href="salle.php"><button class="button button-block"/>Retour</button></a>
</div>
</body>
</html>
