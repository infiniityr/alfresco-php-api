<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 19/09/2018
 * Time: 13:36
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Model;


class TaskFilterRepresentation extends Model
{
    /**
     * @var bool
     */
    public $adc;

    /**
     * @var string
     */
    public $assignment;

    /**
     * @var \DateTime
     */
    public $dueAfter;

    /**
     * @var \DateTime
     */
    public $dueBefore;

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
        'assignment' => 'String',
        'dueAfter' => 'Date',
        'dueBefore' => 'Date',
        'name' => 'String',
        'processDefinitionId' => 'String',
        'processDefinitionKey' => 'String',
        'sort' => 'String',
        'state' => 'String'
    ];
}