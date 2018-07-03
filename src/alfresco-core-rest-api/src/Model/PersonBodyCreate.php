<?php
/**
 * Nom du fichier : PersonBodyCreate.php
 * Projet : alfresco-php-api
 * Date : 17/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class PersonBodyCreate extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $firstName;

    /**
     * @var string
     */
    public $lastName;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $password;

    /**
     * @var string[]
     */
    public $properties;

    protected static $constructProperties = [
        'id' => 'String',
        'firstName' => 'String',
        'lastName' => 'String',
        'email' => 'String',
        'password' => 'String',
        'properties' => ['String' => 'String']
    ];
}