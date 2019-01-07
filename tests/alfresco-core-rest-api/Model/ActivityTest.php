<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 21/09/2018
 * Time: 00:05
 */

namespace AlfPHPApi\Tests\AlfrescoCoreRestApi\Model;

class ActivityTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \AlfPHPApi\AlfrescoCoreRestApi\Model\ActivityActivitySummary
     */
    private $activitySummary;

    protected function setUp()
    {
        $this->activitySummary = \AlfPHPApi\AlfrescoCoreRestApi\Model\ActivityActivitySummary::constructFromArray([
            'firstName' => 'John',
            'lastName' => 'Doe',
            'title' => 'Test'
        ]);
        parent::setUp();
    }

    public function testConstruct() {
        $activity = new \AlfPHPApi\AlfrescoCoreRestApi\Model\Activity();
        $activity->id = 42;
        $activity->postPersonId = "userId";
        $activity->siteId = "siteId";
        $activity->postedAt = new \DateTime("2018-09-21T00:16:00+0000");
        $activity->feedPersonId = "userId";
        $activity->activityType = \AlfPHPApi\AlfrescoCoreRestApi\Model\Activity::SITE_USER_JOINED;
        $activity->activitySummary = $this->activitySummary;

        $this->assertAttributeEquals(42, "id", $activity);
        $this->assertAttributeEquals("userId", "postPersonId", $activity);
        $this->assertAttributeEquals("siteId", "siteId", $activity);
        $this->assertAttributeEquals(new \DateTime("2018-09-21T00:16:00"), "postedAt", $activity);
        $this->assertAttributeEquals("userId", "feedPersonId", $activity);
        $this->assertAttributeEquals(\AlfPHPApi\AlfrescoCoreRestApi\Model\Activity::SITE_USER_JOINED, "activityType", $activity);
        $this->assertAttributeEquals($this->activitySummary, "activitySummary", $activity);

    }

    public function testConstructWithValue() {
        $activity = new \AlfPHPApi\AlfrescoCoreRestApi\Model\Activity("userId", 42, "userId", \AlfPHPApi\AlfrescoCoreRestApi\Model\Activity::SITE_USER_JOINED);

        $this->assertAttributeEquals(42, "id", $activity);
        $this->assertAttributeEquals("userId", "postPersonId", $activity);
        $this->assertAttributeEquals("userId", "feedPersonId", $activity);
        $this->assertAttributeEquals(\AlfPHPApi\AlfrescoCoreRestApi\Model\Activity::SITE_USER_JOINED, "activityType", $activity);
    }

    public function testConstructWithArray() {
        $array = [
            "id" => 42,
            "postPersonId" => "userId",
            "feedPersonId" => "userId",
            "siteId" => "siteId",
            "postedAt" => "2018-09-21T00:16:00+0000",
            "activityType" => \AlfPHPApi\AlfrescoCoreRestApi\Model\Activity::SITE_USER_JOINED,
            "activitySummary" => $this->activitySummary->toArray()
        ];
        $activity = \AlfPHPApi\AlfrescoCoreRestApi\Model\Activity::constructFromArray($array);

        $this->assertAttributeEquals(42, "id", $activity);
        $this->assertAttributeEquals("userId", "postPersonId", $activity);
        $this->assertAttributeEquals("siteId", "siteId", $activity);
        $this->assertAttributeEquals(new \DateTime("2018-09-21T00:16:00"), "postedAt", $activity);
        $this->assertAttributeEquals("userId", "feedPersonId", $activity);
        $this->assertAttributeEquals(\AlfPHPApi\AlfrescoCoreRestApi\Model\Activity::SITE_USER_JOINED, "activityType", $activity);
        $this->assertAttributeEquals($this->activitySummary, "activitySummary", $activity);

    }

    public function testJsonSerialization() {
        $array = [
            "id" => 42,
            "postPersonId" => "userId",
            "feedPersonId" => "userId",
            "siteId" => "userId",
            "postedAt" => "2018-09-21T00:16:00+0000",
            "activityType" => \AlfPHPApi\AlfrescoCoreRestApi\Model\Activity::SITE_USER_JOINED,
        ];
        $activity = \AlfPHPApi\AlfrescoCoreRestApi\Model\Activity::constructFromArray($array);

        $this->assertJsonStringEqualsJsonString(json_encode($array), json_encode($activity));
    }
}