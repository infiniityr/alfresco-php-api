<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 17/08/2018
 * Time: 14:56
 */

namespace AlfPHPApi\Tests;

class EcmAuthTest extends \PHPUnit\Framework\TestCase
{
    private $hostEcm;
    private $ecmUsername;
    private $ecmPassword;

    protected function setUp()
    {
        $this->hostEcm = $_ENV['ALFRESCO_BASE_URL'];
        $this->ecmUsername = $_ENV['ALFRESCO_USERNAME'];
        $this->ecmPassword = $_ENV['ALFRESCO_PASSWORD'];
        parent::setUp();
    }

    public function testSuccessAuthentication() {
        $alfrescoApi = new \AlfPHPApi\AlfrescoApi([
            'hostEcm' => $this->hostEcm
        ]);
        $alfrescoApi->login($this->ecmUsername, $this->ecmPassword)->wait();
        $this->assertFalse(empty($alfrescoApi->ecmAuth->getTicket()));
    }

    public function testWrongCredentials() {
        $alfrescoApi = new \AlfPHPApi\AlfrescoApi([
            'hostEcm' => $this->hostEcm
        ]);
        $alfrescoApi->login('wrong', $this->ecmPassword)
            ->otherwise(function(\GuzzleHttp\Exception\RequestException $exception) {
                $this->assertTrue($exception->getResponse()->getStatusCode() === 403);
            })->wait();
        $this->assertTrue(empty($alfrescoApi->ecmAuth->getTicket()));
    }

    public function testWithoutCredentials() {
        $alfrescoApi = new \AlfPHPApi\AlfrescoApi([
            'hostEcm' => $this->hostEcm
        ]);
        $alfrescoApi->login(null, null)
            ->otherwise(function(\GuzzleHttp\Exception\RequestException $exception) {
                $this->assertTrue($exception->getResponse()->getStatusCode() === 400);
            })->wait();
        $this->assertTrue(empty($alfrescoApi->ecmAuth->getTicket()));
    }

    public function testIsLoggedIn() {
        $alfrescoApi = new \AlfPHPApi\AlfrescoApi([
            'hostEcm' => $this->hostEcm
        ]);
        $alfrescoApi->login($this->ecmUsername, $this->ecmPassword)->wait();
        $this->assertTrue($alfrescoApi->isLoggedIn());
    }

    public function testIsLoggedOut() {
        $alfrescoApi = new \AlfPHPApi\AlfrescoApi([
            'hostEcm' => $this->hostEcm
        ]);
        $alfrescoApi->login($this->ecmUsername, $this->ecmPassword)->wait();
        $this->assertTrue($alfrescoApi->isLoggedIn());
        $alfrescoApi->logout()->wait();
        $this->assertFalse($alfrescoApi->isLoggedIn());
    }
}