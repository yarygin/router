<?php
require_once ("vendor/autoload.php");

use \Yarygin\Route;
use \Yarygin\Router;
use \Yarygin\Exceptions\methodNotAllowedException;
use \Yarygin\Exceptions\notFoundException;

$router = new Router();
$router->register(Route::get("/test/", function() {
    echo "Testing test!";
}));
$router->register(Route::post("/foo/bar", function() {
    echo "foooooooooooooo!!!";
}));
$router->register(Route::get("/", function() {
    echo "It's the root page!";
}));

// example
$method = $_SERVER['REQUEST_METHOD'];
$path = $_SERVER['REQUEST_URI'];
try {
    $router->resolve($method, $path);
} catch (methodNotAllowedException $ex) {
    echo "Method $method Not Allowed";
} catch (notFoundException $ex) {
    echo "Path \"$path\" not found";
} catch (\Exception $ex) {
    echo "Unknown error";
    echo $ex->getMessage();
}