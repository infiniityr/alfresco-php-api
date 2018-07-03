<?php
/**
 * Nom du fichier : SiteMembershipBody1.php
 * Projet : alfresco-php-api
 * Date : 16/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class SiteMembershipBody1 extends Model
{
    /**
     * @var string
     */
    public $message;

    protected static $constructProperties = [
        'message' => 'String'
    ];
}