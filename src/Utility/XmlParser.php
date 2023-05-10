<?php

namespace App\Utility;

use SimpleXMLElement;
use stdClass;

class XmlParser
{
    public static function parse(SimpleXMLElement $xml)
    {
        $a = 1;
        $root = new stdClass;
        foreach ($xml as $key => $value) {
            if ($xml->$key->children() instanceof SimpleXMLElement) {
                $root->{$key} = XmlParser::parse($value);
            } else {
                $root->$key = $xml->$key->children();
            }
        }
        return $root;
    }
}
