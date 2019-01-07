<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 26/09/2018
 * Time: 10:48
 */

namespace AlfPHPApi\Tests\AlfrescoCoreRestApi\Model;


use AlfPHPApi\AlfrescoCoreRestApi\Model\AssocTargetBody;
use AlfPHPApi\Tests\TestCase;

class AssocTargetBodyTest extends TestCase
{
    public function testConstruct()
    {
        $targetId = $this->fakeString();
        $assocType = $this->fakeString();

        $assocTargetBody = new AssocTargetBody();
        $assocTargetBody->targetId = $targetId;
        $assocTargetBody->assocType = $assocType;

        $this->assertAttributeEquals($targetId, 'targetId', $assocTargetBody);
        $this->assertAttributeEquals($assocType, 'assocType', $assocTargetBody);
    }

    public function testConstructWithArray()
    {
        $array = [
            'targetId' => $this->fakeString(),
            'assocType' => $this->fakeString()
        ];

        $assocTargetBody = AssocTargetBody::constructFromArray($array);

        $this->assertAttributeEquals($array['targetId'], 'targetId', $assocTargetBody);
        $this->assertAttributeEquals($array['assocType'], 'assocType', $assocTargetBody);
    }

    public function testJsonSerialization()
    {
        $array = [
            'targetId' => $this->fakeString(),
            'assocType' => $this->fakeString()
        ];

        $assocTargetBody = AssocTargetBody::constructFromArray($array);

        $this->assertJsonStringEqualsJsonString(json_encode($array), json_encode($assocTargetBody));

    }

}