<?php

namespace App\Interfaces;

use SimpleXMLElement;

interface XmlTranslatorInterface
{
    public function toXml();
    public function fromXml(SimpleXMLElement $xml);
}