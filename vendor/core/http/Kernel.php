<?php

namespace Onion\http;

use FastRoute\Dispatcher;
use FastRoute\RouteCollector;
use function FastRoute\simpleDispatcher;


class Kernel
{

    public function handle(Request $request): Response
    {
        $dispather = simpleDispatcher(function (RouteCollector $route_collector) {
            $routes = include ROOT . '/routes/routes.php';

            foreach ($routes as $route)
            {
                $route_collector->addRoute(...$route);
            }
        });

        $route_info = $dispather->dispatch(
            $request->getMethod(),
            $request->getPathInfo()
        );
       
        [$status, [$controller, $method], $vars] = $route_info;

        $response = call_user_func_array([new $controller, $method], $vars);
    
        return $response;
    }

}