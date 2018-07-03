<?php
/**
 * Nom du fichier : PermissionElement.php
 * Projet : alfresco-php-api
 * Date : 17/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class PermissionElement extends Model
{
    /**
     * @var string
     */
    public $authorityId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $accessStatus = self::ALLOWED;

    const ALLOWED = "ALLOWED";

    const DENIED = "DENIED";

    protected static $constructProperties = [
        'authorityId' => 'String',
        'name' => 'String',
        'accessStatus' => 'String'
    ];
}