<?php
/* User login process, checks if user exists and password is correct */
require 'db.php';
// session_start();
// Escape email to protect against SQL injections

$email = $con -> escape_string($_POST['email']);
$post = $con -> escape_string($_POST['post']);
$result = $con->query("SELECT * FROM users WHERE email='$email' and post='$post'");


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


        header("location: profile.php");
    }
    else {
        $_SESSION['message'] = "Veuillez entrer un mot de passe valide.";
        header("location: error.php");
    }
}

