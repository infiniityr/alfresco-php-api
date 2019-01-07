<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 19/09/2018
 * Time: 12:49
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Model;


use AlfPHPApi\AlfrescoCoreRestApi\Model\Model;

class PublishIdentityInfoRepresentation extends Model
{
    /**
     * @var LightGroupRepresentation
     */
    public $group;

    /**
     * @var LightUserRepresentation
     */
    public $person;

    /**
     * @var string
     */
    public $type;

    protected static $constructProperties = [
        'group' => LightGroupRepresentation::class,
        'person' => LightUserRepresentation::class,
        'type' => 'String'
    ];
}