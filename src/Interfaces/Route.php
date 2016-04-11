<?php

namespace Yarygin\Interfaces;

interface Route
{
    public static function get($path, $callback);

    public static function post($path, $callback);

    public static function put($path, $callback);

    public static function delete($path, $callback);

    public static function options($path, $callback);

    public static function patch($path, $callback);

    public function apply($method, $path, $callback);
}