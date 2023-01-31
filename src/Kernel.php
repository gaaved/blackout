<?php


namespace Blackout;


class Kernel
{

    public function boot()
    {
        $routes = Route::getList();
        if (array_key_exists($_SERVER['REQUEST_URI'], $routes)){

            echo ('Route found');
        } else {
            http_response_code(404);
            echo ('404 Not Found');
        }
    }
}