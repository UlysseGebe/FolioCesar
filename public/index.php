<?php

/**
 * Configuration
 */
define('URL', 'https://cesarcadene.com/public/');

/**
 * Routing
 */
// Get 'q' param
$q = !empty($_GET['q']) ? $_GET['q'] : 'home';

// Define controller
$controller = '404';
if ($q == 'home') {
    $controller = 'homePage';
}
else if ($q == 'cinematographer') {
    $controller = 'cinematographerPage';
}
else if ($q == 'director-of-filming') {
    $controller = 'directorPage';
}
else if ($q == 'contact-me') {
    $controller = 'contactPage';
}
// else if (preg_match('/^article\/[1-9][0-9]*$/', $q)) {
//     $controller = 'article';
// }

// Include controller
include '../controllers/'.$controller.'.php';
