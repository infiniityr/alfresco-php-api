<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 08/09/2018
 * Time: 15:08
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Model;


class AbstractUserRepresentation extends Model
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
     * @var string
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
        'id' => 'String',
        'lastName' => 'String',
        'pictureId' => 'Integer'
    ];
}