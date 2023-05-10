<?php

namespace App\Interfaces;

use App\Domain\Header;

interface RequestInterface
{
    public function getUrl(): string;

    public function getHeader(): array;

    public function getBody();
}