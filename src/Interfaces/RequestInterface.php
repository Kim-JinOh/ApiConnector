<?php

namespace App\Interfaces;

use App\Domain\Header;

interface RequestInterface
{
    public function getHeader(): Header;

    public function getBody();

    public function getMethod():string;
}