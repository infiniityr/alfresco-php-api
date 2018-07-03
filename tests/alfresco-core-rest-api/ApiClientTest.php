<?php

use \PHPUnit\Framework\TestCase;
use AlfPHPApi\AlfrescoCoreRestApi\ApiClient;
use \GuzzleHttp\Psr7\Request;

class ApiClientTest extends TestCase
{
    public function testParseDateTimeZone () {
        $date1 = "1977-04-22T01:00:00-05:00";
        $date2 = "2016-10-05T15:34:32.978Z";

        $this->assertEquals(ApiClient::parseDateTimeZone($date1), 240);
        $this->assertEquals(ApiClient::parseDateTimeZone($date2), 600);
    }
    /*
    public function testPromise() {
        $request = new Request('GET', 'https://facebook.com/');
        $client = new \GuzzleHttp\Client();
        $promise = $client->sendAsync($request)
            ->then(function($value) {
                return $value->getBody();
            }, function($value) {
                return $value;
            })
            ->then(function ($value) {
            return $value->read(1024);
        }, function ($value) {
            $value['secondError'] = 500;
            return $value;
        });
        $value = $promise->wait();
        //print_r($value);
        $this->assertEquals(1,1);
    }

    public function testFb () {
        $apiClient = new ApiClient();
        $apiClient->basePath = 'https://facebook.com';
        $response = $apiClient->callApi('/', 'GET', [], [], [], [], [], [], [], [], 'Array')
            ->then(function ($value) {
                return 'test' . $value;
            }, function ($value) {
                return $value;
            });
        //print_r($response->wait());
        $this->assertEquals(1,1);
    }*/

    public function testModelSite () {
        $modelsValues = [
            'id' => '1234567',
            'title' => 'Test Title'
        ];

        $instance = \AlfPHPApi\AlfrescoCoreRestApi\Model\Site::constructFromArray($modelsValues);
        $this->assertInstanceOf(\AlfPHPApi\AlfrescoCoreRestApi\Model\Site::class, $instance);
        $this->assertEquals($instance->id, $modelsValues['id']);
        $this->assertEquals($instance->title, $modelsValues['title']);
    }

    public function testJsonEncode() {
        $json = "{\"entry\":{\"role\":\"SiteManager\",\"visibility\":\"PRIVATE\",\"guid\":\"361f7577-074b-440a-9a74-abea8a5aec1d\",\"id\":\"1870007366-dematic-technique\",\"preset\":\"site-metier\",\"title\":\"GIP Silpc-Dematic Technique\"}}";
        $siteData = json_decode($json, true);

        $sites = \AlfPHPApi\AlfrescoCoreRestApi\Model\SiteEntry::constructFromArray($siteData);

        $this->assertInstanceOf(\AlfPHPApi\AlfrescoCoreRestApi\Model\SiteEntry::class, $sites);

        //$this->assertJsonStringEqualsJsonString($json, json_encode($sites));

        //print_r(json_encode($sites, JSON_PRETTY_PRINT));
    }

    public function testApiAlfre() {
        $alfApi = new ApiClient();
        $alfApi->basePath = "http://10.96.130.162:8080/alfresco/api/-default-/public/alfresco/versions/1";
        $alfApi->authentications = [
            'basicAuth' => [
                'type' => 'basic',
                'username' => 'admin',
                'password' => 'admin'
            ]
        ];

        $siteApi = new \AlfPHPApi\AlfrescoCoreRestApi\Api\SiteApi($alfApi);
        try {
            $promise = $siteApi->getSite('1870007366-economat');
            $response = $promise->wait();
        } catch (Exception $e) {
            print_r($e->getMessage());
        }
        $this->assertInstanceOf(\AlfPHPApi\AlfrescoCoreRestApi\Model\SiteEntry::class,$response);
    }

}