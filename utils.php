<?php 


function dumpDie($variable) {
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    die();
}

function urlIs ( $url ) {
    return ($url === parse_url($_SERVER['REQUEST_URI'])['path']);
}