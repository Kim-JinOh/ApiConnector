<?php

namespace App\Domain;

use App\Interfaces\RequestInterface;

class Request implements RequestInterface
{
    private Header $header;
    private string $method;

    public function getHeader(): Header
    {
        return $this->header;
    }

    public function getBody()
    {
        
    }

    public function getMethod(): string
    {
        return $this->method;
    }

    public function get
}