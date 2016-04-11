<?php

namespace Yarygin;

use Yarygin\Route;
use \Yarygin\Exceptions\methodNotAllowedException;
use \Yarygin\Exceptions\notFoundException;

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
        $route_path = $this->preparePath($path);
        if (isset($this->routes[$route_path])) {
            if (!isset($this->routes[$route_path][$method])) {
                throw new methodNotAllowedException;
            }
            if (isset($this->routes[$route_path][$method])) {
                return $this->routes[$route_path][$method]();
            }
        } else {
            throw new notFoundException;
        }
    }

    /**
     * Register route
     * @param Route $route
     */
    public function register(Route $route)
    {
        $path = $this->preparePath($route->path);
        $method = $route->method;
        $callback = $route->callback;
        $this->routes[$path][$method] = $callback;
    }

    /**
     * Register route
     * @param Route $route
     */
    protected function preparePath($path)
    {
        $route_path = rtrim(addslashes($path),"/");
        return $route_path;
    }
}