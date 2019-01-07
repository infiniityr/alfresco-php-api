<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 21/09/2018
 * Time: 00:46
 */

namespace AlfPHPApi\Tests\AlfrescoCoreRestApi\Model;


class ActivityActivitySummaryTest extends \PHPUnit\Framework\TestCase
{
    public function testConstruct() {
        $activitySummary = new \AlfPHPApi\AlfrescoCoreRestApi\Model\ActivityActivitySummary();
        $activitySummary->firstName = "John";
        $activitySummary->lastName = "Doe";
        $activitySummary->objectId = "objectId";
        $activitySummary->parentObjectId = "objectId";
        $activitySummary->title = "title";

        $this->assertAttributeEquals("John", "firstName", $activitySummary);
        $this->assertAttributeEquals("Doe", "lastName", $activitySummary);
        $this->assertAttributeEquals("objectId", "objectId", $activitySummary);
        $this->assertAttributeEquals("objectId", "parentObjectId", $activitySummary);
        $this->assertAttributeEquals("title", "title", $activitySummary);
    }

    public function testConstructWithArray() {
        $array = [
            'firstName' => 'John',
            'lastName' => 'Doe',
            'objectId' => 'objectId',
            'parentObjectId' => 'objectId',
            'title' => 'title'
        ];
        $activitySummary = \AlfPHPApi\AlfrescoCoreRestApi\Model\ActivityActivitySummary::constructFromArray($array);

        $this->assertAttributeEquals("John", "firstName", $activitySummary);
        $this->assertAttributeEquals("Doe", "lastName", $activitySummary);
        $this->assertAttributeEquals("objectId", "objectId", $activitySummary);
        $this->assertAttributeEquals("objectId", "parentObjectId", $activitySummary);
        $this->assertAttributeEquals("title", "title", $activitySummary);
    }

    public function testJsonSerialization() {
        $array = [
            'firstName' => 'John',
            'lastName' => 'Doe',
            'objectId' => 'objectId',
            'parentObjectId' => 'objectId',
            'title' => 'title'
        ];
        $activitySummary = \AlfPHPApi\AlfrescoCoreRestApi\Model\ActivityActivitySummary::constructFromArray($array);

        $this->assertJsonStringEqualsJsonString(json_encode($array), json_encode($activitySummary));
    }
}