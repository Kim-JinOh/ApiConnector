<?php

namespace App\Domain;

use App\Interfaces\RequestInterface;

class Request implements RequestInterface
{
    private array $header;

    public function getUrl(): string
    {
        return '';
    }
    
    public function getHeader(): array
    {
        return [];
    }

    public function getBody()
    {
        return '<?xml version="1.0" encoding="UTF-8"?>
        <root>
          <param1>value1</param1>
          <param2>value2</param2>
        </root>';
    }


    public function get
}