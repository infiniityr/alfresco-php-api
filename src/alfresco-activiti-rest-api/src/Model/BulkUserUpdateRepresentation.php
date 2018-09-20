<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 12/09/2018
 * Time: 16:23
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Model;


class BulkUserUpdateRepresentation extends Model
{
    /**
     * @var string
     */
    public $accountType;

    /**
     * @var string
     */
    public $password;

    /**
     * @var bool
     */
    public $sendNotifications;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $tenantId;

    /**
     * @var int[]
     */
    public $users;

    protected static $constructProperties = [
        'accountType' => 'String',
        'password' => 'String',
        'sendNotifications' => 'Boolean',
        'status' => 'String',
        'tenantId' => 'Integer',
        'users' => ['Integer']
    ];
}