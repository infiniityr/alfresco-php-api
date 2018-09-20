<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 18/09/2018
 * Time: 23:36
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Model;


class ProcessInstanceRepresentation extends Model
{
    /**
     * @var string
     */
    public $businessKey;

    /**
     * @var \DateTime
     */
    public $ended;

    /**
     * @var bool
     */
    public $graphicalNotationDefined;

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
    public $processDefinitionCategory;

    /**
     * @var string
     */
    public $processDefinitionDeploymentId;

    /**
     * @var string
     */
    public $processDefinitionDescription;

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
     * @var int
     */
    public $processDefinitionVersion;

    /**
     * @var bool
     */
    public $startFormDefined;

    /**
     * @var \DateTime
     */
    public $started;

    /**
     * @var LightUserRepresentation
     */
    public $startedBy;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var RestVariable[]
     */
    public $variables;

    protected static $constructProperties = [
        'businessKey' => 'String',
        'ended' => 'Date',
        'graphicalNotationDefined' => 'Boolean',
        'id' => 'String',
        'name' => 'String',
        'processDefinitionCategory' => 'String',
        'processDefinitionDeploymentId' => 'String',
        'processDefinitionDescription' => 'String',
        'processDefinitionId' => 'String',
        'processDefinitionKey' => 'String',
        'processDefinitionName' => 'String',
        'processDefinitionVersion' => 'Integer',
        'startFormDefined' => 'Boolean',
        'started' => 'Date',
        'startedBy' => LightUserRepresentation::class,
        'tenantId' => 'String',
        'variables' => [RestVariable::class]
    ];
}