<?php
require 'vendor/autoload.php';

use App\Domain\GodoProduct;
use App\Utility\XmlParser;

$xml = simplexml_load_file("./save-sample.xml");
$parsed = XmlParser::parse($xml);

$a =123;