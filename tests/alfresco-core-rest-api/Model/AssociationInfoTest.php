<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 26/09/2018
 * Time: 10:41
 */

namespace AlfPHPApi\Tests\AlfrescoCoreRestApi\Model;


use AlfPHPApi\AlfrescoCoreRestApi\Model\AssociationInfo;
use AlfPHPApi\Tests\TestCase;

class AssociationInfoTest extends TestCase
{
    public function testConstruct()
    {
        $assocType = $this->fakeString();

        $associationInfo = new AssociationInfo();
        $associationInfo->assocType = $assocType;

        $this->assertAttributeEquals($assocType, "assocType", $associationInfo);
    }

    public function testConstructWithArray()
    {
        $array = [
            'assocType' => $this->fakeString()
        ];

        $associationInfo = AssociationInfo::constructFromArray($array);

        $this->assertAttributeEquals($array['assocType'], 'assocType', $associationInfo);
    }

    public function testJsonSerialization()
    {
        $array = [
            'assocType' => $this->fakeString()
        ];

        $associationInfo = AssociationInfo::constructFromArray($array);

        $this->assertJsonStringEqualsJsonString(json_encode($array), json_encode($associationInfo));

    }


}