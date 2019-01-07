<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 18/09/2018
 * Time: 22:52
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Model;


use AlfPHPApi\AlfrescoCoreRestApi\Model\Model;

class LightUserRepresentation extends Model
{
    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $externalId;

    /**
     * @var string
     */
    public $firstName;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $lastName;

    /**
     * @var int
     */
    public $pictureId;

    protected static $constructProperties = [
        'email' => 'String',
        'externalId' => 'String',
        'firstName' => 'String',
        'id' => 'Integer',
        'lastName' => 'String',
        'pictureId' => 'Integer'
    ];
}