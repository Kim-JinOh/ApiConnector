<?php
require 'vendor/autoload.php';

use App\Domain\GodoProduct;

$product = new GodoProduct();
// 객체를 JSON으로 변환
// XML 파일 경로
$xmlFile = 'save-sample.xml';

// XML 파일 읽기
$xml = simplexml_load_file($xmlFile);

$product->fromXml($xml);