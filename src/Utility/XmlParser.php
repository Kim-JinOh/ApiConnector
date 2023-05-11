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
            if (count((array)$value) > 1) {
                $root->{$key} = $root->{$key} ?? [];
                $root->{$key}[(string)$value->attributes()] = XmlParser::parse($value);
            } else {
                $root->$key = (string)$value;
            }
        }
        return $root;
    }

    public static function isChild(SimpleXMLElement $xml)
    {
        foreach ($xml as $key => $value) {
            $a = 1;
        }
    }
}
