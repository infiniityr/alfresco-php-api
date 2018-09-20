<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 17/09/2018
 * Time: 16:04
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Model;


class EndpointRequestHeaderRepresentation extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $value;

    protected static $constructProperties = [
        'name' => 'String',
        'value' => 'String'
    ];
}