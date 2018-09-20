<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 19/09/2018
 * Time: 17:55
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Model;


class TenantEvent extends Model
{
    /**
     * @var \DateTime
     */
    public $eventTime;

    /**
     * @var string
     */
    public $eventType;

    /**
     * @var string
     */
    public $extraInfo;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $tenantId;

    /**
     * @var int
     */
    public $userId;

    /**
     * @var string
     */
    public $userName;

    protected static $constructProperties = [
        'eventTime' => 'Date',
        'eventType' => 'String',
        'extraInfo' => 'String',
        'id' => 'Integer',
        'tenantId' => 'Integer',
        'userId' => 'Integer',
        'userName' => 'String'
    ];
}