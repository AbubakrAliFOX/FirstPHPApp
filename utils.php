<?php 

function dumpDie($variable) {
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    die();
}