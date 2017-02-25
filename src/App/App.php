<?php

namespace App;

use DI\ContainerBuilder;

class App extends \DI\Bridge\Slim\App
{
    /**
     * @param ContainerBuilder $builder
     */
    protected function configureContainer(ContainerBuilder $builder)
    {
        $builder->addDefinitions(__DIR__ . '/settings.php');

        $componentCollections = require __DIR__ . '/components.php';
        $componentPath = __DIR__ . '/../';

        foreach ($componentCollections as $collection => $components) {

            foreach ($components as $component) {
                $componentSettings = $componentPath . "{$collection}/{$component}/settings.php";

                if (is_file($componentSettings)) {
                    $builder->addDefinitions($componentSettings);
                }
            }

        }

        $builder->addDefinitions(['components' => $componentCollections]);
    }

    /**
     *
     */
    public function loadComponents()
    {
        /** @var Bootstrap $bootstrap */
        $bootstrap = $this->getContainer()->get('App.Bootstrap');
        $bootstrap->components();
    }
}
