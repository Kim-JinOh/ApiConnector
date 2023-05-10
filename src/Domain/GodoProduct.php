<?php

namespace App\Domain;

use App\Interfaces\XmlParsable;
use App\Interfaces\XmlTranslatorInterface;
use SimpleXMLElement;

class GodoProduct implements XmlParsable
{
    public string $goods_data;
    public string $goods_category;
    public string $goodsnm;
    public string $meta_title;
    public string $goodscd;
    public string $origin;
    public string $maker;
    public int $brandno;
    public string $tax;
    #[NotParseXml]
    public string $test;

    public function toXml()
    {
        return null;
    }

    public function fromXml(string $xml)
    {
        $goods_data = $xml->goods_data;
        $temp = $goods_data->getChildren();
        foreach($goods_data as $data){
            $a = 1;
        }
        return $this;
    }
}
