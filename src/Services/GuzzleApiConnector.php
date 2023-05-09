<?php

namespace App\Services;

use App\Domain\Response;
use App\Interfaces\ApiConnectorInterface;
use App\Interfaces\RequestInterface;
use App\Interfaces\ResponseInterface;

class GuzzleApiConnector implements ApiConnectorInterface
{
    public function send(RequestInterface $request): ResponseInterface
    {
        return new Response();
    }
}