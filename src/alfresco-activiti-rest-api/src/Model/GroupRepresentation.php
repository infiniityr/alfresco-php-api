<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 18/09/2018
 * Time: 22:22
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Model;


use AlfPHPApi\AlfrescoCoreRestApi\Model\Model;

class GroupRepresentation extends Model
{
    /**
     * @var GroupCapabilityRepresentation[]
     */
    public $capabilities;

    /**
     * @var string
     */
    public $externalId;

    /**
     * @var GroupRepresentation[]
     */
    public $groups;

    /**
     * @var int
     */
    public $id;

    /**
     * @var \DateTime
     */
    public $lastSyncTimeStamp;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $parentGroupId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $tenantId;

    /**
     * @var int
     */
    public $type;

    /**
     * @var int
     */
    public $userCount;

    /**
     * @var UserRepresentation[]
     */
    public $users;

    protected static $constructProperties = [
        'capabilities' => [GroupCapabilityRepresentation::class],
        'externalId' => 'String',
        'groups' => [GroupRepresentation::class],
        'id' => 'Integer',
        'lastSyncTimeStamp' => 'Date',
        'name' => 'String',
        'parentGroupId' => 'Integer',
        'status' => 'String',
        'tenantId' => 'Integer',
        'type' => 'Integer',
        'userCount' => 'Integer',
        'users' => [UserRepresentation::class]
    ];
}