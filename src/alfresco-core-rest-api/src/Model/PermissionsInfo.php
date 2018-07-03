<?php
/**
 * Nom du fichier : PermissionsInfo.php
 * Projet : alfresco-php-api
 * Date : 17/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class PermissionsInfo extends Model
{
    /**
     * @var bool
     */
    public $isInheritanceEnabled;

    /**
     * @var PermissionElement[]
     */
    public $inherited;

    /**
     * @var PermissionElement[]
     */
    public $locallySet;

    /**
     * @var string[]
     */
    public $settable;

    protected static $constructProperties = [
        'isInheritanceEnabled' => 'Boolean',
        'inherited' => [PermissionElement::class],
        'locallySet' => [PermissionElement::class],
        'settable' => ['String']
    ];
}