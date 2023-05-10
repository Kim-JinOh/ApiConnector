<?php

namespace App\Interfaces;

use SimpleXMLElement;

interface XmlParsable
{
    public function toXml();
    public function fromXml(string $xml);
}