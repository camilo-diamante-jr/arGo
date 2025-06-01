<?php
// main.php

// Include necessary configuration and modules
include_once 'includes/config/database.php';
include_once 'includes/config/path.php';
include_once 'modules/authentications/auth.php';  // Include auth functions

define("FILE_EXTENSION", ".php");

// Function to load the appropriate paths based on login status
function loadPageContent($loginPaths, $templatePaths)
{
    // Check if the user is logged in and load the appropriate content
    $isLoggedIn = isLoggedIn();
    $pathsToLoad = $isLoggedIn ? $templatePaths : $loginPaths;

    loadPaths($pathsToLoad);
}

// Function to include all files in the provided paths array
function loadPaths(array $paths)
{
    foreach ($paths as $path) :
        include $path . FILE_EXTENSION;
    endforeach;
}


$loginPaths = [
    LAYOUTS_PATH . 'header',
    AUTHENTICATION_PATH . 'login',
    LAYOUTS_PATH . 'footer',
];

$templatePaths = [
    LAYOUTS_PATH . 'header',
    COMPONENTS_PATH . 'navbar',
    TEMPLATES_PATH . 'template',
    LAYOUTS_PATH . 'footer',
];


loadPageContent($loginPaths, $templatePaths);
