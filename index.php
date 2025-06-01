<?php

include_once 'includes/config/database.php';
include_once 'includes/config/path.php';


define("FILE_EXTENSION", ".php");

function loadTemplates($templatePaths)
{

    foreach ($templatePaths as $templatePath) :
        include $templatePath . FILE_EXTENSION;
    endforeach;
}


$templatePaths = [
    LAYOUTS_PATH . 'header',
    TEMPLATES_PATH . 'template',
    LAYOUTS_PATH . 'footer',
];

loadTemplates($templatePaths);
