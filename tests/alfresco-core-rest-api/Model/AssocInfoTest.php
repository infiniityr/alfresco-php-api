<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 26/09/2018
 * Time: 10:46
 */

namespace AlfPHPApi\Tests\AlfrescoCoreRestApi\Model;


use AlfPHPApi\AlfrescoCoreRestApi\Model\AssocInfo;
use AlfPHPApi\Tests\TestCase;

class AssocInfoTest extends TestCase
{
    public function testConstruct()
    {
        $assocType = $this->fakeString();

        $assocInfo = new AssocInfo();
        $assocInfo->assocType = $assocType;

        $this->assertAttributeEquals($assocType, "assocType", $assocInfo);
    }

    public function testConstructWithArray()
    {
        $array = [
            'assocType' => $this->fakeString()
        ];

        $assocInfo = AssocInfo::constructFromArray($array);

        $this->assertAttributeEquals($array['assocType'], 'assocType', $assocInfo);
    }

    public function testJsonSerialization()
    {
        $array = [
            'assocType' => $this->fakeString()
        ];

        $assocInfo = AssocInfo::constructFromArray($array);

        $this->assertJsonStringEqualsJsonString(json_encode($array), json_encode($assocInfo));

    }
}