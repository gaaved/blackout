<?php

namespace Blackout;

class Kernel
{
    public function boot()
    {
        $routes = Route::getList();
        $uri = $_SERVER['REQUEST_URI'];
        $methodServer = $_SERVER['REQUEST_METHOD'];
        $methodRequest = $routes[$uri]['method'];


        if (array_key_exists($uri, $routes)) {
          if ($methodServer === $methodRequest){
              $controller = new $routes[$uri]['args'][0];

              return call_user_func([$controller, $routes[$uri]['args'][1]]);
          } else {
              http_response_code(404);

              echo ('404 Not Found');
          }
        } else {
            http_response_code(404);

            echo ('404 Not Found');
        }
    }
}