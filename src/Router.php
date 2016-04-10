<?php

namespace Yarygin;

use Yarygin\Route;

class Router
{

    /**
     * @var Route[]
     */
    protected $routes = [];

    public function apply($method, Route $route)
    {

    }

    public function getRoutes()
    {
        return $this->routes;
    }

    /**
     * Ececute Router callback
     *
     * @param $method
     * @param $path
     * @return mixed
     */
    public function resolve($method, $path)
    {
        if (isset($this->routes[$path][$method])) {
            return $this->routes[$path][$method]();
        } elseif ($this->routes[$path."/"][$method]) {
            return $this->routes[$path."/"][$method]();
        } else {
            echo 404;
        }
    }

    /**
     * Register route
     * @param Route $route
     */
    public function register(Route $route)
    {
        $path = addslashes($route->path);
        $method = $route->method;
        $callback = $route->callback;
        $this->routes[$path][$method] = $callback;
    }
}