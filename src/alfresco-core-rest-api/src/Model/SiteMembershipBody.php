<?php
/**
 * Nom du fichier : SiteMembershipBody.php
 * Projet : alfresco-php-api
 * Date : 16/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class SiteMembershipBody extends Model
{
    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $title;

    protected static $constructProperties = [
        'message' => 'String',
        'id' => 'String',
        'title' => 'String'
    ];
}