<?php
/* Displays user information and some useful messages */
session_start();

// Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = "Tu dois connecter avant de visiter la page d'accueil !";
  header("location: error.php");    
}
  else {
    // Makes it easier to read
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $email = $_SESSION['email'];
    $post = $_SESSION['post'];
    // $active = $_SESSION['active'];
}
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Welcome <?= $first_name.' '.$last_name ?></title>
  <?php include 'css/css.html'; ?>
</head>

<body>
  <div class="form">

          <h1>Bienvenue</h1>
          
          <p>
          <?php 
     
          // Display message about account verification link only once
          if ( isset($_SESSION['message']) )
          {
              echo $_SESSION['message'];
              
              // Don't annoy the user with more messages upon page refresh
              unset( $_SESSION['message'] );
          }
          
          ?>
          </p>
                  <!--  // Keep reminding the user this account is not active, until they activate-->

       <!--   <?php

          //if ( !$active ){
         //     echo
         //     '<div class="info">
        //      Account is unverified, please confirm your email by clicking
       //       on the email link!
       //       </div>';
       //   }

       //   ?>-->

          <h2><?php echo $first_name.' '.$last_name; ?></h2>
          <p>
            <!-- <?= $email ?> -->
              
            </p>
      <?php
      if ($_SESSION['post'] == 'admin') {
          echo  '<a href="admin.php"><BUTTON class="button button-block text-center" value="Bienvenue" name="Bienvenue">Bienvenue</BUTTON></a>';
         


          
      } elseif ($_SESSION['post'] == 'etudiant') {
          echo  '<a href="emploietudiant.php"><BUTTON class="button button-block text-center" value="Bienvenue" name="Bienvenue">Bienvenue</BUTTON></a>';

      } elseif ($_SESSION['post'] == 'enseignant') {
          echo  '<a href="enseignant.php"><BUTTON class="button button-block text-center" value="Bienvenue" name="Bienvenue">Bienvenue</BUTTON></a>';}

      ?>

      <!--<a href="index.html"><BUTTON class="button button-block text-center" value="Bienvenue" name="Bienvenue">Bienvenue</BUTTON></a>-->

    </div>
    
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js"></script>

</body>
</html>
