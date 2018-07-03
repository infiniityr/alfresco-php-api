<?php
/**
 * Nom du fichier : Company.php
 * Projet : alfresco-php-api
 * Date : 16/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class Company extends Model
{
    /**
     * @var string
     */
    public $organization;

    /**
     * @var string
     */
    public $address1;

    /**
     * @var string
     */
    public $address2;

    /**
     * @var string
     */
    public $address3;

    /**
     * @var string
     */
    public $postcode;

    /**
     * @var string
     */
    public $telephone;

    /**
     * @var string
     */
    public $fax;

    /**
     * @var string
     */
    public $email;

    protected static $constructProperties = [
        'organization' => 'String',
        'address1' => 'String',
        'address2' => 'String',
        'address3' => 'String',
        'postcode' => 'String',
        'telephone' => 'String',
        'fax' => 'String',
        'email' => 'String'
    ];
}