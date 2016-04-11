<?php

namespace Yarygin;

class Route implements Interfaces\Route
{
    public $path;

    public $method;

    public $callback;

    public function __construct($method, $path, $callback)
    {
        $this->apply($method, $path, $callback);
    }

    public static function get($path, $callback)
    {
        $route = new self("GET", $path, $callback);
        return $route;
    }

    public static function post($path, $callback)
    {
        $route = new self("POST", $path, $callback);
        return $route;
    }

    public static function put($path, $callback)
    {
        $route = new self("PUT", $path, $callback);
        return $route;
    }

    public static function delete($path, $callback)
    {
        $route = new self("DELETE", $path, $callback);
        return $route;
    }

    public static function options($path, $callback)
    {
        $route = new self("OPTIONS", $path, $callback);
        return $route;
    }

    public static function patch($path, $callback)
    {
        $route = new self("PATCH", $path, $callback);
        return $route;
    }

    public function apply($method, $path, $callback)
    {
        $this->method = $method;
        $this->path = $path;
        $this->callback = $callback;
    }
}