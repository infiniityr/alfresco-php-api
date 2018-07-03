<?php
/**
 * Nom du fichier : AssocChildBody.php
 * Projet : alfresco-php-api
 * Date : 16/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class AssocChildBody extends Model
{
    /**
     * @var string
     */
    public $childId;

    /**
     * @var string
     */
    public $assocType;

    protected static $constructProperties = [
        'childId' => 'String',
        'assocType' => 'String'
    ];
}