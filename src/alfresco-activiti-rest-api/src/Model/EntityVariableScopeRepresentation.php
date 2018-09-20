<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 17/09/2018
 * Time: 16:06
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Model;


class EntityVariableScopeRepresentation extends Model
{
    /**
     * @var EntityAttributeScopeRepresentation[]
     */
    public $attributes;

    /**
     * @var string
     */
    public $entityName;

    /**
     * @var int
     */
    public $mappedDataModel;

    /**
     * @var string
     */
    public $mappedVariableName;

    protected static $constructProperties = [
        'attributes' => [EntityAttributeScopeRepresentation::class],
        'entityName' => 'String',
        'mappedDataModel' => 'Integer',
        'mappedVariableName' => 'String'
    ];
}