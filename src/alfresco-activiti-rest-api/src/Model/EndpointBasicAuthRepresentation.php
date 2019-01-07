<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 15/09/2018
 * Time: 18:21
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Model;


use AlfPHPApi\AlfrescoCoreRestApi\Model\Model;

class EndpointBasicAuthRepresentation extends Model
{
    /**
     * @var \DateTime
     */
    public $created;

    /**
     * @var int
     */
    public $id;

    /**
     * @var \DateTime
     */
    public $lastUpdated;

    /**
     * @var String
     */
    public $name;

    /**
     * @var int
     */
    public $tenantId;

    /**
     * @var string
     */
    public $username;

    protected static $constructProperties = [
        'created' => 'Date',
        'id' => 'Integer',
        'lastUpdated' => 'Date',
        'name' => 'String',
        'tenantId' => 'Integer',
        'username' => 'String'
    ];
}