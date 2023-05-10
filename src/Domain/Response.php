<?php

namespace App\Domain;

use App\Interfaces\ResponseInterface;

class Response implements ResponseInterface
{
    public function __construct(private $response){
        
    }
    public function getHeader()
    {
        
    }

    public function getBody()
    {
        
    }
}