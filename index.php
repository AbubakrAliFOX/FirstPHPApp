<?php 

require("utils.php");

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$folder = "controllers";

$routes = [
    '/' => 'controllers/index.php',
    '/contact' => 'controllers/contact.php',
    '/about' => 'controllers/about.php'
];

if(array_key_exists($uri, $routes)) {
    require $routes[$uri];
    
    dumpDie("$routes[$uri]");
} else {
    http_response_code(404);

    echo "Not Found 404";

    die();
}

