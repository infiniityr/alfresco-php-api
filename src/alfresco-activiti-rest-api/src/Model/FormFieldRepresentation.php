<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 18/09/2018
 * Time: 19:43
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Model;


use AlfPHPApi\AlfrescoCoreRestApi\Model\Model;

class FormFieldRepresentation extends Model
{
    /**
     * @var string
     */
    public $className;

    /**
     * @var int
     */
    public $col;

    /**
     * @var int
     */
    public $colspan;

    /**
     * @var bool
     */
    public $hasEmptyValue;

    /**
     * @var string
     */
    public $id;

    /**
     * @var LayoutRepresentation
     */
    public $layout;

    /**
     * @var int
     */
    public $maxLength;

    /**
     * @var string
     */
    public $maxValue;

    /**
     * @var int
     */
    public $minLength;

    /**
     * @var string
     */
    public $minValue;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $optionType;

    /**
     * @var OptionRepresentation[]
     */
    public $options;

    /**
     * @var bool
     */
    public $overrideId;

    /**
     * @var array
     */
    public $params;

    /**
     * @var string
     */
    public $placeholder;

    /**
     * @var bool
     */
    public $readOnly;

    /**
     * @var string
     */
    public $regexPattern;

    /**
     * @var bool
     */
    public $required;

    /**
     * @var string
     */
    public $restIdProperty;

    /**
     * @var string
     */
    public $restLabelProperty;

    /**
     * @var string
     */
    public $restResponsePath;

    /**
     * @var string
     */
    public $restUrl;

    /**
     * @var int
     */
    public $row;

    /**
     * @var int
     */
    public $sizeX;

    /**
     * @var int
     */
    public $sizeY;

    /**
     * @var string
     */
    public $tab;

    /**
     * @var array
     */
    public $value;

    /**
     * @var ConditionRepresentation
     */
    public $visibilityCondition;

    protected static $constructProperties = [
        'className' => 'String',
        'col' => 'Integer',
        'colspan' => 'Integer',
        'hasEmptyValue' => 'Boolean',
        'id' => 'String',
        'layout' => LayoutRepresentation::class,
        'maxLength' => 'Integer',
        'maxValue' => 'String',
        'minLength' => 'Integer',
        'minValue' => 'String',
        'name' => 'String',
        'optionType' => 'String',
        'options' => [OptionRepresentation::class],
        'overrideId' => 'Boolean',
        'params' => 'Boolean',
        'placeholder' => 'String',
        'readOnly' => 'Boolean',
        'regexPattern' => 'String',
        'required' => 'Boolean',
        'restIdProperty' => 'String',
        'restLabelProperty' => 'String',
        'restResponsePath' => 'String',
        'restUrl' => 'String',
        'row' => 'Integer',
        'sizeX' => 'Integer',
        'sizeY' => 'Integer',
        'tab' => 'String',
        'type' => 'String',
        'value' => 'Array',
        'visibilityCondition' => ConditionRepresentation::class
    ];
}