<?php
/* User login process, checks if user exists and password is correct */
require 'db.php';
// session_start();
// Escape email to protect against SQL injections

$email = $con -> escape_string($_POST['email']);
$post = $con -> escape_string($_POST['post']);
$result = $con->query("SELECT * FROM users WHERE post='$post'");


if ( $result->num_rows == 0 ){ // User doesn't exist
    $_SESSION['message'] = " ";
    header("location: error.php");
}
else { // User exists
    $user = $result->fetch_assoc();

    if ( password_verify($_POST['password'], $user['password']) ) {
        
        $_SESSION['email'] = $user['email'];
        $_SESSION['post'] = $user['post'];
        $_SESSION['first_name'] = $user['first_name'];
        $_SESSION['last_name'] = $user['last_name'];
        
        // This is how we'll know the user is logged in
        $_SESSION['logged_in'] = true;


        header("location: choix2.php");
    }
    else {
        $_SESSION['message'] = "Veuillez entrer un mot de passe valide.";
        header("location: error.php");
    }
}


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
