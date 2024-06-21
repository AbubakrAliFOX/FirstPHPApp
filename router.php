<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'index',
    '/contact' => 'contact',
    '/about' => 'about'
];

function routeToController($uri, $routes) {
    $folder = "controllers";

    if(array_key_exists($uri, $routes)) {
        require "$folder/$routes[$uri].php";
    } else {
        http_response_code(404);
    
        require "views/404.php";
    
        die();
    }
}

routeToController($uri, $routes);