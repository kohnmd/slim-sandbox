<?php
use App\Bootstrap;
use App\Component\RouteRegistry;
use Interop\Container\ContainerInterface;

return [
    'path.src' => __DIR__ . '/../',

    'settings.displayErrorDetails' => true,
    'settings.addContentLengthHeader' => false,

    'renderer' => [
        'template_path' => __DIR__ . '/../../templates/',
    ],

    'logger' => [
        'name' => 'slim-app',
        'path' => __DIR__ . '/../../logs/app.log',
        'level' => \Monolog\Logger::DEBUG,
    ],

    'App.Component.RouteRegistry' => function(ContainerInterface $c) {
        return new RouteRegistry($c);
    },
    'App.Bootstrap' => function(RouteRegistry $routeRegistry) {
        return new Bootstrap($routeRegistry);
    }
];


//return [
//    'settings' => [
//        'displayErrorDetails' => true, // set to false in production
//        'addContentLengthHeader' => false, // Allow the web server to send the content-length header
//
//        // Renderer settings
//        'renderer' => [
//            'template_path' => __DIR__ . '/../templates/',
//        ],
//
//        // Monolog settings
//        'logger' => [
//            'name' => 'slim-app',
//            'path' => __DIR__ . '/../logs/app.log',
//            'level' => \Monolog\Logger::DEBUG,
//        ],
//
//        // Components
//
//
//        'componentPath' => __DIR__ . 'settings.php/',
//    ],
//];
