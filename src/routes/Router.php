<?php

namespace app\routes;

class Router
{
    private array $routes = [];
    
    public function __construct()
    {
        $this->routes = include("routes.php");
    }


    public function executeRoute($routePath): void
    {
        $routes = array_filter($this->routes, function ($v, $k) use ($routePath) {
            return $this->matchRoute($routePath, $v["route"]);
        }, ARRAY_FILTER_USE_BOTH);

        $routes = array_values($routes);

        if (!empty($routes)) {
            $route = $routes[0];
            $id = $this->getIdFromRoute($routePath, $route["route"]);

            $factory = new $route["factory"]();
            $controller = $factory->factoryMethod();
            if (!empty($id)) $controller->{$route["method"]}($id); else $controller->{$route["method"]}();
        }
    }

    private function matchRoute(string $routePath, string $route): bool
    {
        $routePathItems = explode("/", $routePath);
        $routeItems = explode("/", $route);

        if (count($routeItems) !== count($routePathItems)) {
            return false;
        }

        for ($i = 0; $i < count($routeItems); $i++) {
            if ($routeItems[$i] === "{id}") {
                if (intval($routePathItems[$i]) <= 0) {
                    return false;
                }
            } else if ($routeItems[$i] != $routePathItems[$i]) {
                return false;
            }
        }

        return true;
    }

    private function getIdFromRoute(string $routePath, string $route): int
    {
        $routePathItems = explode("/", $routePath);
        $routeItems = explode("/", $route);

        if (count($routePathItems) === count($routeItems)) {
            for ($i = 0; $i < count($routeItems); $i++) {
                if ($routeItems[$i] === "{id}") {
                    return intval($routePathItems[$i]);
                }
            }
        }

        return 0;
    }
}