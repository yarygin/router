<?php

namespace Yarygin\Interfaces;

interface Route
{
    public function get($path, $callback);

    public function post($path, $callback);

    public function put($path, $callback);

    public function delete($path, $callback);

    public function options($path, $callback);

    public function patch($path, $callback);

    public function apply($method, $path, $callback);
}