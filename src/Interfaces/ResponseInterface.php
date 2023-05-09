<?php

namespace App\Interfaces;

interface ResponseInterface
{
    public function getHeader();
    public function getBody();
}