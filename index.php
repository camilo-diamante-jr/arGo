<?php

define('FILE_EXTENSION', '.php');
include 'includes/config/path.php';



/**
 * Load template files from the specified paths.
 *
 * @param array $templatePaths An array of template paths to include.
 */


function loadTemplate($templatePaths)
{


    foreach ($templatePaths as $templatePath) :
        include $templatePath . FILE_EXTENSION;
    endforeach;
}


$templatePath = [
    LAYOUTS_PATH . '/header',
    TEMPLATES_PATH . '/template',
    LAYOUTS_PATH . '/footer'
];

loadTemplate($templatePath);
