<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 19/09/2018
 * Time: 13:08
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Model;


use AlfPHPApi\AlfrescoCoreRestApi\Model\Model;

class RestVariable extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $scope;

    /**
     * @var string
     */
    public $type;

    /**
     * @var array
     */
    public $value;

    /**
     * @var string
     */
    public $valueUrl;

    protected static $constructProperties = [
        'name' => 'String',
        'scope' => 'String',
        'type' => 'String',
        'value' => 'Array',
        'valueUrl' => 'String'
    ];
}