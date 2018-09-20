<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 15/09/2018
 * Time: 17:58
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Model;


class ConditionRepresentation extends Model
{
    /**
     * @var string
     */
    public $leftFormFieldId;

    /**
     * @var string
     */
    public $leftRestResponseId;

    /**
     * @var string
     */
    public $nextConditionOperator;

    /**
     * @var string
     */
    public $operator;

    /**
     * @var string
     */
    public $rightFormFieldId;

    /**
     * @var string
     */
    public $rightRestResponseId;

    /**
     * @var string
     */
    public $rightType;

    /**
     * @var array
     */
    public $rightValue;

    protected static $constructProperties = [
        'leftFormFieldId' => 'String',
        'leftRestResponseId' => 'String',
        'nextConditionOperator' => 'String',
        'operator' => 'String',
        'rightFormFieldId' => 'String',
        'rightRestResponseId' => 'String',
        'rightType' => 'String',
        'rightValue' => 'Array'
    ];
}