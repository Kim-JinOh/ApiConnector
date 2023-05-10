<?php

namespace App\Interfaces;

use App\Domain\Header;

interface ResponseInterface
{
    public function getHeader();
    public function getBody();
}
