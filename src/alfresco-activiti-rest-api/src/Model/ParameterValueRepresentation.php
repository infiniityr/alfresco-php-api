<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 18/09/2018
 * Time: 23:25
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Model;


class ParameterValueRepresentation extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $value;

    protected static $constructProperties = [
        'id' => 'String',
        'name' => 'String',
        'version' => 'String',
        'value' => 'String'
    ];
}