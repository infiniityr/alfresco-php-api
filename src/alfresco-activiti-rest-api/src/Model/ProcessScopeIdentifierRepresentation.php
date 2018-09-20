<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 19/09/2018
 * Time: 12:36
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Model;


class ProcessScopeIdentifierRepresentation extends Model
{
    /**
     * @var string
     */
    public $processActivityId;

    /**
     * @var int
     */
    public $processModelId;

    protected static $constructProperties = [
        'processActivityId' => 'String',
        'processModelId' => 'Integer'
    ];
}