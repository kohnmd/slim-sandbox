<?php

namespace Sandbox\Person\Controller;

use Sandbox\Person\Service\PersonService;
use Slim\Http\Request;
use Slim\Http\Response;

class PersonController
{
    /** @var PersonService */
    private $service;

    /**
     * PersonController constructor.
     * @param PersonService $service
     */
    public function __construct(PersonService $service)
    {
        $this->service = $service;
    }

    /**
     *
     */
    public function index()
    {
        // TODO
        sd('index');
    }

    /**
     * @param int $id
     */
    public function get($id)
    {
        // TODO
        sd($id);
    }
}
