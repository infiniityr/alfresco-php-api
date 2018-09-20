<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 18/09/2018
 * Time: 22:50
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Model;


class LightGroupRepresentation extends Model
{
    /**
     * @var string
     */
    public $externalId;

    /**
     * @var LightGroupRepresentation[]
     */
    public $groups;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $status;

    protected static $constructProperties = [
        'externalId' => 'String',
        'groups' => [LightGroupRepresentation::class],
        'id' => 'Integer',
        'name' => 'String',
        'status' => 'String'
    ];
}