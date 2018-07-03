<?php
/**
 * Nom du fichier : ChildAssocInfo.php
 * Projet : alfresco-php-api
 * Date : 16/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class ChildAssocInfo extends Model
{
    /**
     * @var string
     */
    public $assocType;

    /**
     * @var bool
     */
    public $isPrimary;

    protected static $constructProperties = [
        'assocType' => 'String',
        'isPrimary' => 'Boolean'
    ];
}