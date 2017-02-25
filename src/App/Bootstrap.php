<?php

namespace App;

use App\Component\RouteRegistry;

class Bootstrap
{
    /** @var RouteRegistry */
    private $routeRegistry;

    /**
     * Bootstrap constructor.
     * @param RouteRegistry $routeRegistry
     */
    public function __construct(RouteRegistry $routeRegistry)
    {
        $this->routeRegistry = $routeRegistry;
    }

    public function components()
    {
        $this->routeRegistry->registerFromComponents();
    }
}
