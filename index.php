<?php
require_once ("vendor/autoload.php");

$router = new \Yarygin\Router();
$router->register(new \Yarygin\Route("GET", "/test/", function() {
    echo "Trsting test!";
}));
$router->register(new \Yarygin\Route("POST", "/foo/bar", function() {
    echo "foooooooooooooo!!!";
}));
$router->register(new \Yarygin\Route("GET", "/", function() {
    echo "It's the root page!";
}));

// example
$method = $_SERVER['REQUEST_METHOD'];
$path = $_SERVER['REQUEST_URI'];
$router->resolve($method, $path);
