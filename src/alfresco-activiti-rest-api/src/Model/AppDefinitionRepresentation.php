<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 12/09/2018
 * Time: 15:42
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Model;


use AlfPHPApi\AlfrescoCoreRestApi\Model\Model;

class AppDefinitionRepresentation extends Model
{
    /**
     * @var string
     */
    public $defaultAppId;

    /**
     * @var string
     */
    public $deploymentId;

    /**
     * @var string
     */
    public $description;

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
    public $modelId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $tenantId;

    /**
     * @var string
     */
    public $theme;

    protected static $constructProperties = [
        'defaultAppId' => 'String',
        'deploymentId' => 'String',
        'description' => 'String',
        'icon' => 'String',
        'id' => 'Integer',
        'modelId' => 'Integer',
        'name' => 'String',
        'tenantId' => 'Integer',
        'theme' => 'String'
    ];
}