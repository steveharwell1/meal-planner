<?php

session_start();

if(!isset($_SESSION['username']) || empty($_SESSION['username'])){

    header("location: login.php");
  
    exit;
  
}

if($_SESSION !== "stephen"){
// Unset all of the session variables

$_SESSION = array();

 

// Destroy the session.

session_destroy();

 

// Redirect to login page

header("location: login.php");

exit;
}

$name = htmlspecialchars($_SESSION['username']);