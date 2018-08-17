<?php

use \PHPUnit\Framework\TestCase;

class AlfrescoApiClientTest extends TestCase {
    public function testStringConvertToString() {
        $value = "Example String";
        $this->assertEquals(\AlfPHPApi\AlfrescoApiClient::convertToType($value, 'String'), $value);
    }

    public function testNullStringToNull() {
        $this->assertEquals(\AlfPHPApi\AlfrescoApiClient::convertToType(null, 'String'), null);
    }

    public function testStringToDateTime() {
        $date = '2015-11-17T03:33:17Z';
        $this->assertEquals(new DateTime($date), \AlfPHPApi\AlfrescoApiClient::convertToType($date, 'Date'));
    }

    public function testNullDateToNull() {
        $this->assertEquals(null, \AlfPHPApi\AlfrescoApiClient::convertToType(null, 'Date'));
    }

    public function testEmptyDateToNull() {
        $this->assertEquals(null, \AlfPHPApi\AlfrescoApiClient::convertToType('', 'Date'));
    }
}