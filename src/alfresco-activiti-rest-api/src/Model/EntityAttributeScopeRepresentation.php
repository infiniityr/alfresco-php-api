<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 17/09/2018
 * Time: 16:05
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Model;


use AlfPHPApi\AlfrescoCoreRestApi\Model\Model;

class EntityAttributeScopeRepresentation extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $type;

    protected static $constructProperties = [
        'name' => 'String',
        'type' => 'String'
    ];
}