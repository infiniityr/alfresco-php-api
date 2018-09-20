<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 19/09/2018
 * Time: 13:21
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Model;


class TaskAuditRepresentation extends Model
{
    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var string
     */
    public $processDefinitionId;

    /**
     * @var string
     */
    public $processDefinitionName;

    /**
     * @var int
     */
    public $processDefinitionVersion;

    /**
     * @var LightUserRepresentation
     */
    public $assignee;

    /**
     * @var \DateTime
     */
    public $startTime;

    /**
     * @var \DateTime
     */
    public $endTime;

    /**
     * @var array[]
     */
    public $formData;

    /**
     * @var string
     */
    public $selectedOutcome;

    /**
     * @var array[]
     */
    public $comments;

    protected static $constructProperties = [
        'taskId' => 'String',
        'taskName' => 'String',
        'processDefinitionId' => 'String',
        'processDefinitionName' => 'String',
        'processDefinitionVersion' => 'Integer',
        'assignee' => LightUserRepresentation::class,
        'startTime' => 'Date',
        'endTime' => 'Date',
        'formData' => ['Array'],
        'selectedOutcome' => 'String',
        'comments' => ['Array']
    ];
}