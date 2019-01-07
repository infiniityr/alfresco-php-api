<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 19/09/2018
 * Time: 18:22
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Model;


use AlfPHPApi\AlfrescoCoreRestApi\Model\Model;

class VariableScopeRepresentation extends Model
{
    /**
     * @var string
     */
    public $mapVariable;

    /**
     * @var string
     */
    public $mappedColumn;

    /**
     * @var int
     */
    public $mappedDataModel;

    /**
     * @var string
     */
    public $mappedEntity;

    /**
     * @var string
     */
    public $mappedVariableName;

    /**
     * @var string
     */
    public $processVariableName;

    /**
     * @var string
     */
    public $processVariableType;

    protected static $constructProperties = [
        'mapVariable' => 'String',
        'mappedColumn' => 'String',
        'mappedDataModel' => 'Integer',
        'mappedEntity' => 'String',
        'mappedVariableName' => 'String',
        'processVariableName' => 'String',
        'processVariableType' => 'String'
    ];
}