<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 19/09/2018
 * Time: 18:12
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Model;


class UserRepresentation extends Model
{
    /**
     * @var LightAppRepresentation[]
     */
    public $apps;

    /**
     * @var string[]
     */
    public $capabilities;

    /**
     * @var string
     */
    public $company;

    /**
     * @var \DateTime
     */
    public $created;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $externalId;

    /**
     * @var string
     */
    public $firstName;

    /**
     * @var string
     */
    public $fullname;

    /**
     * @var GroupRepresentation[]
     */
    public $groups;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $lastName;

    /**
     * @var \DateTime
     */
    public $lastUpdate;

    /**
     * @var \DateTime
     */
    public $latestSyncTimeStamp;

    /**
     * @var string
     */
    public $password;

    /**
     * @var int
     */
    public $pictureId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $tenantId;

    /**
     * @var string
     */
    public $tenantName;

    /**
     * @var int
     */
    public $tenantPictureId;

    /**
     * @var string
     */
    public $type;

    protected static $constructProperties = [
        'apps' => [LightAppRepresentation::class],
        'capabilities' => ['String'],
        'company' => 'String',
        'created' => 'Date',
        'email' => 'String',
        'externalId' => 'String',
        'firstName' => 'String',
        'fullname' => 'String',
        'groups' => [GroupRepresentation::class],
        'id' => 'Integer',
        'lastName' => 'String',
        'lastUpdate' => 'Date',
        'latestSyncTimeStamp' => 'Date',
        'password' => 'String',
        'pictureId' => 'Integer',
        'status' => 'String',
        'tenantId' => 'Integer',
        'tenantName'  => 'String',
        'tenantPictureId' => 'Integer',
        'type' => 'String'
    ];
}