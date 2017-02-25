<?php

namespace App\Component;

use Interop\Container\ContainerInterface;
use Slim\Collection;

class RouteRegistry
{
    /** @var ContainerInterface */
    private $container;

    /**
     * Router constructor.
     * @param ContainerInterface $container
     */
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    /**
     *
     */
    public function registerFromComponents()
    {
        $componentCollections = $this->container->get('components');
        $componentPath = $this->container->get('path.src');

        foreach ($componentCollections as $collection => $components) {

            foreach ($components as $component) {

                $file = $componentPath . "{$collection}/{$component}/routes.php";

                if (is_file($file)) {
                    require $file;
                }
            }

        }
    }
}
