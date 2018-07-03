<?php

use \PHPUnit\Framework\TestCase;
use \AlfPHPApi\AlfrescoApiClient;
use \AlfPHPApi\AlfrescoCoreRestApi\ApiClient;

class AlfrescoApiClientTest extends TestCase {

    public function testInitialisation () {
        $alfrescoApiClient = new AlfrescoApiClient();
        $this->assertInstanceOf(AlfrescoApiClient::class, $alfrescoApiClient);
        $this->assertInstanceOf(ApiClient::class, $alfrescoApiClient);
    }

}