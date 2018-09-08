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

    public function testGMTTimezone() {
        $this->assertEquals(date_create("2015-10-17 03:33:17")->format("Ymd-His"), \AlfPHPApi\AlfrescoApiClient::convertToType('2015-11-17T03:33:17', 'Date')->format("Ymd-His"));
    }

    public function testBSTTimezone() {
        $this->assertEquals(date_create("2015-09-17 03:33:17")->format("Ymd-His"), \AlfPHPApi\AlfrescoApiClient::convertToType('2015-10-17T03:33:17', 'Date')->format("Ymd-His"));
    }

    public function testUTCZuluTimezone() {
        $this->assertEquals(date_create("2015-09-17 03:33:17")->format("Ymd-His"), \AlfPHPApi\AlfrescoApiClient::convertToType('2015-11-17T03:33:17Z', 'Date')->format("Ymd-His"));
    }

    public function testUTCZeroOffsetTimezone() {
        $this->assertEquals(date_create("2015-09-17 03:33:17")->format("Ymd-His"), \AlfPHPApi\AlfrescoApiClient::convertToType('2015-11-17T03:33:17+0000', 'Date')->format("Ymd-His"));
    }

    public function testUTCPositiveOffsetTimezone() {
        $this->assertEquals(date_create("2015-09-17 01:33:17")->format("Ymd-His"), \AlfPHPApi\AlfrescoApiClient::convertToType('2015-11-17T03:33:17+0200', 'Date')->format("Ymd-His"));
    }

    public function testUTCNegativeOffsetTimezone() {
        $this->assertEquals(date_create("2015-09-17 05:33:17")->format("Ymd-His"), \AlfPHPApi\AlfrescoApiClient::convertToType('2015-11-17T03:33:17-0200', 'Date')->format("Ymd-His"));
    }

    public function testPartHourOffsetTimezone() {
        $this->assertEquals(date_create("2015-09-17 12:53:17")->format("Ymd-His"), \AlfPHPApi\AlfrescoApiClient::convertToType('2015-11-17T03:23:17-0930', 'Date')->format("Ymd-His"));
    }

    public function testWithTimezoneSeparator() {
        $this->assertEquals(date_create("2015-09-17 01:33:17")->format("Ymd-His"), \AlfPHPApi\AlfrescoApiClient::convertToType('2015-11-17T03:33:17+02:00', 'Date')->format("Ymd-His"));
    }

    public function testWithHourOnly() {
        $this->assertEquals(date_create("2015-09-17 01:33:17")->format("Ymd-His"), \AlfPHPApi\AlfrescoApiClient::convertToType('2015-11-17T03:33:17+02', 'Date')->format("Ymd-His"));
    }
}