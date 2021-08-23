<?php
    //start session management
    session_start();
    //destroy the user session
    session_destroy();
    // unset the cookie
    setcookie('remember_me', '', time() - 31536000, '/');
    //redirect to the login page after logout
    header("location:../index.php"); 
?>