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

    $response = $this->post(
      url: $request->getUrl(),
      header: $request->getHeader(),
      body: $request->getBody()
    );
    return new Response($response);
  }

  private function post(string $url, array $header, mixed $body)
  {
    $ch = curl_init();

    // cURL 옵션 설정
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);

    // API 요청 실행
    $response = curl_exec($ch);

    // cURL 핸들러 종료
    curl_close($ch);

    return $response;
  }
}
