<?php
/**
 * Nom du fichier : AssocInfo.php
 * Projet : alfresco-php-api
 * Date : 16/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class AssocInfo extends Model
{
    /**
     * @var string
     */
    public $assocType;

    protected static $constructProperties = [
        'assocType' => 'String'
    ];
}