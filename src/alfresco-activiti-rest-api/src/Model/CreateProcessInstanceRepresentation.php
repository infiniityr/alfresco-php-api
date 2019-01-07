<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 15/09/2018
 * Time: 18:06
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Model;


use AlfPHPApi\AlfrescoCoreRestApi\Model\Model;

class CreateProcessInstanceRepresentation extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $outcome;

    /**
     * @var string
     */
    public $processDefinitionKey;

    /**
     * @var string
     */
    public $businessKey;

    /**
     * @var string
     */
    public $processDefinitionId;

    /**
     * @var array
     */
    public $variables;

    /**
     * @var array
     */
    public $values;

    protected static $constructProperties = [
        'name' => 'String',
        'outcome' => 'String',
        'processDefinitionKey' => 'String',
        'businessKey' => 'String',
        'processDefinitionId' => 'String',
        'variables' => 'Array',
        'values' => 'Array'
    ];
}