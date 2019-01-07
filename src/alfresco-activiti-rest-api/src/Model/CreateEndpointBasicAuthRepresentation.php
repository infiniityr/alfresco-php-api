<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 15/09/2018
 * Time: 18:04
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Model;


use AlfPHPApi\AlfrescoCoreRestApi\Model\Model;

class CreateEndpointBasicAuthRepresentation extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $password;

    /**
     * @var int
     */
    public $tenantId;

    /**
     * @var string
     */
    public $username;

    protected static $constructProperties = [
        'name' => 'String',
        'password' => 'String',
        'tenantId' => 'Integer',
        'username' => 'String'
    ];
}