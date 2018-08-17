<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 17/08/2018
 * Time: 14:15
 */

use \PHPUnit\Framework\TestCase;

class AlfrescoApiTest extends TestCase
{
    public function testConfigParamDefaultValue() {
        $alfrescoApi = new \AlfPHPApi\AlfrescoApi();
        $this->assertEquals('http://127.0.0.1:8080/alfresco/api/-default-/public/alfresco/versions/1', $alfrescoApi->ecmClient->basePath);
    }

    public function testConfigParamHostAndContextRoot() {
        $config = [
            'hostEcm' => 'http://testServer.com:1616',
            'contextRoot' => 'strangeContextRoot'
        ];
        $alfrescoApi = new \AlfPHPApi\AlfrescoApi($config);

        $this->assertEquals('http://testServer.com:1616/strangeContextRoot/api/-default-/public/alfresco/versions/1', $alfrescoApi->ecmClient->basePath);
    }

    public function testCsrfDisableInClient() {
        $config = [
            'hostEcm' => 'http://testServer.com:1616',
            'contextRoot' => 'strangeContextRoot',
            'disableCsrf' => true
        ];
        $alfrescoApi = new \AlfPHPApi\AlfrescoApi($config);

        $this->assertFalse($alfrescoApi->ecmClient->isCsrfEnabled());
        $this->assertFalse($alfrescoApi->bpmClient->isCsrfEnabled());
    }

    public function testCsrfEnableInClient() {
        $config = [
            'hostEcm' => 'http://testServer.com:1616',
            'contextRoot' => 'strangeContextRoot',
            'disableCsrf' => false
        ];
        $alfrescoApi = new \AlfPHPApi\AlfrescoApi($config);

        $this->assertTrue($alfrescoApi->ecmClient->isCsrfEnabled());
        $this->assertTrue($alfrescoApi->bpmClient->isCsrfEnabled());
    }
}