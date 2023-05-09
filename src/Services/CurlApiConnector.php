<?php

namespace App\Services;

use App\Domain\Response;
use App\Interfaces\ApiConnectorInterface;
use App\Interfaces\RequestInterface;
use App\Interfaces\ResponseInterface;

class CurlApiConnector implements ApiConnectorInterface
{
    public function send(RequestInterface $request): ResponseInterface
    {
        // XML 데이터 생성
        $xml_data = '<?xml version="1.0" encoding="UTF-8"?>
<root>
  <param1>value1</param1>
  <param2>value2</param2>
</root>';

        // cURL 핸들러 생성
        $ch = curl_init();

        // cURL 옵션 설정
        curl_setopt($ch, CURLOPT_URL, 'https://example.com/api'); // API 엔드포인트 URL 설정
        curl_setopt($ch, CURLOPT_POST, true); // POST 요청 설정
        curl_setopt($ch, CURLOPT_POSTFIELDS, $xml_data); // POST 데이터 설정
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // 결과값 반환 설정
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/xml')); // Content-Type 헤더 설정

        // API 요청 실행
        $response = curl_exec($ch);

        // cURL 핸들러 종료
        curl_close($ch);

        // 결과값 출력
        echo $response;
        return new Response();
    }
}
