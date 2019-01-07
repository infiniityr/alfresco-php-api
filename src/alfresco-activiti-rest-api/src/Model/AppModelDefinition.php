<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 12/09/2018
 * Time: 15:55
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Model;


use AlfPHPApi\AlfrescoCoreRestApi\Model\Model;

class AppModelDefinition extends Model
{
    /**
     * @var int
     */
    public $createdBy;

    /**
     * @var string
     */
    public $createdByFullName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $id;

    /**
     * @var \DateTime
     */
    public $lastUpdated;

    /**
     * @var string
     */
    public $lastUpdatedBy;

    /**
     * @var string
     */
    public $lastUpdatedByFullName;

    /**
     * @var int
     */
    public $modelType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $stencilSetId;

    /**
     * @var int
     */
    public $version;

    protected static $constructProperties = [
        'createdBy' => 'Integer',
        'createdByFullName' => 'String',
        'description' => 'String',
        'id' => 'Integer',
        'lastUpdated' => 'Date',
        'lastUpdatedBy' => 'Integer',
        'lastUpdatedByFullName' => 'String',
        'modelType' => 'Integer',
        'name' => 'String',
        'stencilSetId' => 'Integer',
        'version' => 'Integer'
    ];
}