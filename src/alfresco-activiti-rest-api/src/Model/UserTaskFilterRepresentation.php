<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 19/09/2018
 * Time: 18:18
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Model;


use AlfPHPApi\AlfrescoCoreRestApi\Model\Model;

class UserTaskFilterRepresentation extends Model
{
    /**
     * @var int
     */
    public $appId;

    /**
     * @var TaskFilterRepresentation
     */
    public $filter;

    /**
     * @var string
     */
    public $icon;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $index;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $recent;

    protected static $constructProperties = [
        'appId' => 'Integer',
        'filter' => TaskFilterRepresentation::class,
        'icon' => 'String',
        'id' => 'Integer',
        'index' => 'Integer',
        'name' => 'String',
        'recent' => 'Boolean'
    ];
}