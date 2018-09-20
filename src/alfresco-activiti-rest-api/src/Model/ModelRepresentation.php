<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 18/09/2018
 * Time: 23:01
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Model;


class ModelRepresentation extends Model
{
    /**
     * @var string
     */
    public $comment;

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
     * @var bool
     */
    public $favorite;

    /**
     * @var int
     */
    public $id;

    /**
     * @var \DateTime
     */
    public $lastUpdated;

    /**
     * @var int
     */
    public $lastUpdatedBy;

    /**
     * @var string
     */
    public $lastUpdatedByFullName;

    /**
     * @var bool
     */
    public $latestVersion;

    /**
     * @var int
     */
    public $modelType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $permission;

    /**
     * @var int
     */
    public $referenceId;

    /**
     * @var int
     */
    public $stencilSet;

    /**
     * @var int
     */
    public $version;

    protected static $constructProperties = [
        'comment' => 'String',
        'createdBy' => 'Integer',
        'createdByFullName' => 'String',
        'description' => 'String',
        'favorite' => 'Boolean',
        'id' => 'Integer',
        'lastUpdated' => 'Date',
        'lastUpdatedBy' => 'Integer',
        'lastUpdatedByFullName' => 'String',
        'latestVersion' => 'Boolean',
        'modelType' => 'Integer',
        'name' => 'String',
        'permission' => 'String',
        'referenceId' => 'Integer',
        'stencilSet' => 'Integer',
        'version' => 'Integer'
    ];
}