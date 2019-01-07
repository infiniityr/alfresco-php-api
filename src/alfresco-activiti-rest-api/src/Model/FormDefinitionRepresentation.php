<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 17/09/2018
 * Time: 16:40
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Model;


use AlfPHPApi\AlfrescoCoreRestApi\Model\Model;

class FormDefinitionRepresentation extends Model
{
    /**
     * @var string
     */
    public $className;

    /**
     * @var array
     */
    public $customFieldTemplates;

    /**
     * @var FormFieldRepresentation[]
     */
    public $fields;

    /**
     * @var bool
     */
    public $gridsterForm;

    /**
     * @var int
     */
    public $id;

    /**
     * @var FormJavascriptEventRepresentation[]
     */
    public $javascriptEvents;

    /**
     * @var array
     */
    public $metadata;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $outcomeTarget;

    /**
     * @var FormOutcomeRepresentation[]
     */
    public $outcomes;

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
    public $processDefinitionName;

    /**
     * @var string
     */
    public $selectedOutcome;

    /**
     * @var string
     */
    public $style;

    /**
     * @var FormTabRepresentation[]
     */
    public $tabs;

    /**
     * @var string
     */
    public $taskDefinitionKey;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskName;

    protected static $constructProperties = [
        'className' => 'String',
        'customFieldTemplates' => ['String' => 'String'],
        'fields' => [FormFieldRepresentation::class],
        'gridsterForm' => 'Boolean',
        'id' => 'Integer',
        'javascriptEvents' => [FormJavascriptEventRepresentation::class],
        'metadata' => ['String' => 'String'],
        'name' => 'String',
        'outcomeTarget' => 'String',
        'outcomes' => [FormOutcomeRepresentation::class],
        'processDefinitionId' => 'String',
        'processDefinitionKey' => 'String',
        'processDefinitionName' => 'String',
        'selectedOutcome' => 'String',
        'style' => 'String',
        'tabs' => [FormTabRepresentation::class],
        'taskDefinitionKey' => 'String',
        'taskId' => 'String',
        'taskName' => 'String'
    ];
}