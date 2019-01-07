<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 12/09/2018
 * Time: 15:51
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Model;


use AlfPHPApi\AlfrescoCoreRestApi\Model\Model;

class AppDefinitionUpdateResultRepresentation extends Model
{
    /**
     * @var AppDefinitionRepresentation
     */
    public $appDefinition;

    /**
     * @var array
     */
    public $customData;

    /**
     * @var bool
     */
    public $error;

    /**
     * @var string
     */
    public $errorDescription;

    /**
     * @var int
     */
    public $errorType;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $messageKey;

    protected static $constructProperties = [
        'appDefinition' => AppDefinitionRepresentation::class,
        'customData' => 'Array',
        'error' => 'Boolean',
        'errorDescription' => 'String',
        'errorType' => 'Integer',
        'message' => 'String',
        'messageKey' => 'String'
    ];
}