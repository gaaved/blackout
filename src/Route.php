<?php

namespace Blackout;

use Blackout\Traits\Singleton;

class Route
{

    use Singleton;

    private array $routes = [];

    public static function get($path, array $args)
    {

        self::object()->routes[$path] = [
            'path' => $path,
            'args' => $args,
        ];
    }

    public static function getList()
    {
        return self::object()->routes;
    }
}