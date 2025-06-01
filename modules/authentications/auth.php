<?php
// auth.php

session_start();

// Check if user is logged in
function isLoggedIn()
{
    return isset($_SESSION['user_id']);
}


function logout()
{
    session_start();           // Always start the session first
    session_unset();           // Unset all session variables
    session_destroy();         // Destroy the session

    header("Location: ../../index.php");
    exit;
}
