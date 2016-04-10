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

    public function get($path, $callback)
    {
        $this->apply("GET", $path, $callback);
    }

    public function post($path, $callback)
    {
        $this->apply("POST", $path, $callback);
    }

    public function put($path, $callback)
    {
        $this->apply("PUT", $path, $callback);
    }

    public function delete($path, $callback)
    {
        $this->apply("DELETE", $path, $callback);
    }

    public function options($path, $callback)
    {
        $this->apply("OPTIONS", $path, $callback);
    }

    public function patch($path, $callback)
    {
        $this->apply("GET", $path, $callback);
    }

    public function apply($method, $path, $callback)
    {
        $this->method = $method;
        $this->path = $path;
        $this->callback = $callback;
    }
}