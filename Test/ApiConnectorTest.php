<?php

use App\Domain\Request;
use App\Domain\Response;
use App\Interfaces\ApiConnectorInterface;
use App\Services\CurlApiConnector;
use PHPUnit\Framework\TestCase;

final class ApiConnectorTest extends TestCase
{
    public function test_CurlApiConnector_whenSend_thenSuccess()
    {
        //arrange
        $apiConnector = new CurlApiConnector();
        $request = new Request();

        //action
        $response = $apiConnector->send($request);

        //assert
        $this->assertSame(Response::class, get_class($response));
    }
}