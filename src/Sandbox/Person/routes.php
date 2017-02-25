<?php
global $app;

$app->group('/person', function() {
    $this->get(
        '[/]',
        ['\Sandbox\Person\Controller\PersonController', 'index']
    );

    $this->get(
        '/{id:[0-9]+}',
        ['\Sandbox\Person\Controller\PersonController', 'get']
    );
});
