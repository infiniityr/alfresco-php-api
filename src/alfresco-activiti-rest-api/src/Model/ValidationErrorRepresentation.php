<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 19/09/2018
 * Time: 18:20
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Model;


use AlfPHPApi\AlfrescoCoreRestApi\Model\Model;

class ValidationErrorRepresentation extends Model
{
    /**
     * @var string
     */
    public $defaultDescription;

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
    public $problem;

    /**
     * @var string
     */
    public $problemReference;

    /**
     * @var string
     */
    public $validatorSetName;

    /**
     * @var bool
     */
    public $warning;

    protected static $constructProperties = [
        'defaultDescription' => 'String',
        'id' => 'String',
        'name' => 'String',
        'problem' => 'String',
        'problemReference' => 'String',
        'validatorSetName' => 'String',
        'warning' => 'Boolean'
    ];
}