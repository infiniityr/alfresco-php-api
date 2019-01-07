<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 25/09/2018
 * Time: 00:36
 */

namespace AlfPHPApi\Tests\AlfrescoCoreRestApi\Model;


use \AlfPHPApi\AlfrescoCoreRestApi\Model\Activity;
use AlfPHPApi\AlfrescoCoreRestApi\Model\ActivityEntry;
use AlfPHPApi\AlfrescoCoreRestApi\Model\ActivityPaging;
use AlfPHPApi\AlfrescoCoreRestApi\Model\ActivityPagingList;
use AlfPHPApi\AlfrescoCoreRestApi\Model\Pagination;
use AlfPHPApi\Tests\TestCase;

/**
 * Test the classes :
 *      - ActivityEntry
 *      - ActivityPaging
 *      - ActivityPagingList
 */
class ActivityPaginationTest extends TestCase
{
    public function testEntry()
    {
        $activity = $this->fake(Activity::class);

        $activityEntry = ActivityEntry::constructFromArray([
            'entry' => $activity->toArray(true)
        ]);

        $this->assertAttributeEquals($activity, "entry", $activityEntry);

    }

    public function testPagingList()
    {
        $entries = $this->fakeArray(ActivityEntry::class, 10);
        $pagination = $this->fake(Pagination::class);

        $activityPagingList = ActivityPagingList::constructFromArray([
            'entries' => json_decode(json_encode($entries), true),
            'pagination' => $pagination->toArray(true)
        ]);

        $this->assertAttributeEquals($entries, "entries", $activityPagingList);
        $this->assertAttributeEquals($pagination, "pagination", $activityPagingList);

    }

    public function testPaging()
    {
        $activityPagingList = $this->fake(ActivityPagingList::class);

        $activityPaging = ActivityPaging::constructFromArray([
            'list' => $activityPagingList->toArray(true)
        ]);

        $this->assertAttributeEquals($activityPagingList, "list", $activityPaging);

    }


}