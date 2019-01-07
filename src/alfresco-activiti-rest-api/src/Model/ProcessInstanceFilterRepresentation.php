<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 18/09/2018
 * Time: 23:32
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Model;


use AlfPHPApi\AlfrescoCoreRestApi\Model\Model;

class ProcessInstanceFilterRepresentation extends Model
{
    /**
     * @var bool
     */
    public $asc;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $processDefinitionId;

    /**
     * @var string
     */
    public $processDefinitionKey;

    /**
     * @var string
     */
    public $sort;

    /**
     * @var string
     */
    public $state;

    protected static $constructProperties = [
        'asc' => 'Boolean',
        'name' => 'String',
        'processDefinitionId' => 'String',
        'processDefinitionKey' => 'String',
        'sort' => 'String',
        'state' => 'String'
    ];
}