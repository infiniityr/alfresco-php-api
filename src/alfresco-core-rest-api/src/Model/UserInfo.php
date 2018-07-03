<?php
/**
 * Nom du fichier : UserInfo.php
 * Projet : alfresco-php-api
 * Date : 16/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class UserInfo extends Model
{
    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $id;

    protected static $constructProperties = [
        'displayName' => 'String',
        'id' => 'String'
    ];
}