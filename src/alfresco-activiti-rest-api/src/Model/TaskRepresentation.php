<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 19/09/2018
 * Time: 15:18
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Model;


class TaskRepresentation extends Model
{
    /**
     * @var bool
     */
    public $adhocTaskCanBeReassigned;

    /**
     * @var LightUserRepresentation
     */
    public $assignee;

    /**
     * @var string
     */
    public $category;

    /**
     * @var \DateTime
     */
    public $created;

    /**
     * @var string
     */
    public $description;

    /**
     * @var \DateTime
     */
    public $dueDate;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var \DateTime
     */
    public $endDate;

    /**
     * @var string
     */
    public $formKey;

    /**
     * @var string
     */
    public $id;

    /**
     * @var bool
     */
    public $initiatorCanCompleteTask;

    /**
     * @var LightUserRepresentation[]
     */
    public $involvedPeople;

    /**
     * @var bool
     */
    public $memberOfCandidateGroup;

    /**
     * @var bool
     */
    public $memberOfCandidateUsers;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $parentTaskId;

    /**
     * @var string
     */
    public $parentTaskName;

    /**
     * @var int
     */
    public $priority;

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
     * @var string
     */
    public $processInstanceId;

    /**
     * @var string
     */
    public $processInstanceName;

    /**
     * @var string
     */
    public $processInstanceStartUserId;

    protected static $constructProperties = [
        'adhocTaskCanBeReassigned' => 'Boolean',
        'assignee' => LightUserRepresentation::class,
        'category' => 'String',
        'created' => 'Date',
        'description' => 'String',
        'dueDate' => 'Date',
        'duration' => 'Integer',
        'endDate' => 'Date',
        'formKey' => 'String',
        'id' => 'String',
        'initiatorCanCompleteTask' => 'Boolean',
        'involvedPeople' => [LightUserRepresentation::class],
        'memberOfCandidateGroup' => 'Boolean',
        'memberOfCandidateUsers' => 'Boolean',
        'name' => 'String',
        'parentTaskId' => 'String',
        'parentTaskName' => 'String',
        'priority' => 'Integer',
        'processDefinitionCategory' => 'String',
        'processDefinitionDeploymentId' => 'String',
        'processDefinitionDescription' => 'String',
        'processDefinitionId' => 'String',
        'processDefinitionKey' => 'String',
        'processDefinitionName' => 'String',
        'processDefinitionVersion' => 'Integer',
        'processInstanceId' => 'String',
        'processInstanceName' => 'String',
        'processInstanceStartUserId' => 'String'
    ];
}