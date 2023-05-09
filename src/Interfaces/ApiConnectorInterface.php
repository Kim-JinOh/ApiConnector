<?php

namespace App\Interfaces;

interface ApiConnectorInterface
{
    public function send(RequestInterface $request):ResponseInterface;
}