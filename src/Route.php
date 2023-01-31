<?php

namespace Blackout;

class Route
{

    private static array $routes = [];

    public static function get($path, ...$args)
    {

        self::$routes[$path] = [
            'path' => $path,
            'args' => $args,
        ];
    }
}