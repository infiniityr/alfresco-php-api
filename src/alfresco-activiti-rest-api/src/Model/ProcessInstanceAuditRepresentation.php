<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 18/09/2018
 * Time: 23:29
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Model;


class ProcessInstanceAuditRepresentation extends Model
{
    /**
     * @var int
     */
    public $processInstanceId;

    /**
     * @var string
     */
    public $processInstanceName;

    /**
     * @var string
     */
    public $processDefinitionName;

    /**
     * @var string
     */
    public $processDefinitionVersion;

    /**
     * @var \DateTime
     */
    public $processInstanceStartTime;

    /**
     * @var \DateTime
     */
    public $processInstanceEndTime;

    /**
     * @var string
     */
    public $processInstanceInitiator;

    /**
     * @var array
     */
    public $entries;

    /**
     * @var array
     */
    public $decisionInfo;

    protected static $constructProperties = [
        'processInstanceId' => 'Integer',
        'processInstanceName' => 'String',
        'processDefinitionName' => 'String',
        'processDefinitionVersion' => 'String',
        'processInstanceStartTime' => 'Date',
        'processInstanceEndTime' => 'Date',
        'processInstanceInitiator' => 'String',
        'entries' => 'Array',
        'decisionInfo' => 'Array'
    ];
}