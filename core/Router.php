<?php

namespace app\core;

class Router
{
    public Request $request;


    protected array $routes = [];

    /**
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function get($path, $callback)
    {
        return $this->routes['get'][$path] = $callback;
    }

    public function resolve()
    {
//        return $this->routes['get']['/']();
    }
}