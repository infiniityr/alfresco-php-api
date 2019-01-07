<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 19/09/2018
 * Time: 12:38
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Model;


use AlfPHPApi\AlfrescoCoreRestApi\Model\Model;

class ProcessScopeRepresentation extends Model
{
    /**
     * @var string[]
     */
    public $activityIds;

    /**
     * @var array[]
     */
    public $activityIdsByCollapsedSubProcessIdMap;

    /**
     * @var array[]
     */
    public $activityIdsByDecisionTableIdMap;

    /**
     * @var array[]
     */
    public $activityIdsByFormIdMap;

    /**
     * @var string[]
     */
    public $activityIdsWithExcludedSubProcess;

    /**
     * @var array[]
     */
    public $customStencilVariables;

    /**
     * @var array[]
     */
    public $entityVariables;

    /**
     * @var array[]
     */
    public $executionVariables;

    /**
     * @var array[]
     */
    public $fieldToVariableMappings;

    /**
     * @var FormScopeRepresentation[]
     */
    public $forms;

    /**
     * @var array[]
     */
    public $metadataVariables;

    /**
     * @var int
     */
    public $modelId;

    /**
     * @var int
     */
    public $processModelType;

    /**
     * @var array[]
     */
    public $responseVariables;

    protected static $constructProperties = [
        'activityIds' => ['String'],
        'activityIdsByCollapsedSubProcessIdMap' => ['String' => 'Array'],
        'activityIdsByDecisionTableIdMap' => ['String' => 'Array'],
        'activityIdsByFormIdMap' => ['String' => 'Array'],
        'activityIdsWithExcludedSubProcess' => ['String'],
        'customStencilVariables' => ['String' => 'Array'],
        'entityVariables' => ['String' => 'Array'],
        'executionVariables' => ['String' => 'Array'],
        'fieldToVariableMappings' => ['String' => 'Array'],
        'forms' => [FormScopeRepresentation::class],
        'metadataVariables' => ['String' => 'Array'],
        'modelId' => 'Integer',
        'processModelType' => 'Integer',
        'responseVariables' => ['String' => 'Array']
    ];
}