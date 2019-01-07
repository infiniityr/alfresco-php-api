<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 25/09/2018
 * Time: 19:19
 */

namespace AlfPHPApi\Tests\AlfrescoCoreRestApi\Model;


use AlfPHPApi\AlfrescoCoreRestApi\Model\AssocChildBody;
use AlfPHPApi\Tests\TestCase;

class AssocChildBodyTest extends TestCase
{
    public function testConstruct()
    {
        $childId = $this->fakeString();
        $assocType = $this->fakeString();

        $assocChildBody = new AssocChildBody();
        $assocChildBody->childId = $childId;
        $assocChildBody->assocType = $assocType;

        $this->assertAttributeEquals($childId, "childId", $assocChildBody);
        $this->assertAttributeEquals($assocType, "assocType", $assocChildBody);

    }

    public function testConstructWithArray()
    {
        $arrayAssocChildBody = [
            'childId' => $this->fakeString(),
            'assocType' => $this->fakeString()
        ];

        $assocChildBody = AssocChildBody::constructFromArray($arrayAssocChildBody);

        $this->assertAttributeEquals($arrayAssocChildBody['childId'], 'childId', $assocChildBody);
        $this->assertAttributeEquals($arrayAssocChildBody['assocType'], 'assocType', $assocChildBody);

    }

    public function testJsonSerialization()
    {
        $arrayAssocChildBody = [
            'childId' => $this->fakeString(),
            'assocType' => $this->fakeString()
        ];

        $assocChildBody = AssocChildBody::constructFromArray($arrayAssocChildBody);

        $this->assertJsonStringEqualsJsonString(json_encode($arrayAssocChildBody), json_encode($assocChildBody));

    }


}