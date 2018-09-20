<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 17/09/2018
 * Time: 15:57
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Model;


class EndpointConfigurationRepresentation extends Model
{
    /**
     * @var int
     */
    public $basicAuthId;

    /**
     * @var string
     */
    public $basicAuthName;

    /**
     * @var string
     */
    public $host;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $port;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var EndpointRequestHeaderRepresentation[]
     */
    public $requestHeaders;

    /**
     * @var int
     */
    public $tenantId;

    protected static $constructProperties = [
        'basicAuthId' => 'Integer',
        'basicAuthName' => 'String',
        'host' => 'String',
        'id' => 'Integer',
        'name' => 'String',
        'path' => 'String',
        'port' => 'String',
        'protocol' => 'String',
        'requestHeaders' => [EndpointRequestHeaderRepresentation::class],
        'tenantId' => 'Integer'
    ];
}