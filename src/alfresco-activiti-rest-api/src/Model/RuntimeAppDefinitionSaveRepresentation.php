<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 19/09/2018
 * Time: 13:15
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Model;


use AlfPHPApi\AlfrescoCoreRestApi\Model\Model;

class RuntimeAppDefinitionSaveRepresentation extends Model
{
    /**
     * @var AppDefinitionRepresentation[]
     */
    public $appDefinitions;

    protected static $constructProperties = [
        'appDefinitions' => [AppDefinitionRepresentation::class]
    ];
}