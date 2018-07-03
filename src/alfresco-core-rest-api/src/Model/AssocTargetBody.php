<?php
/**
 * Nom du fichier : AssocTargetBody.php
 * Projet : alfresco-php-api
 * Date : 16/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class AssocTargetBody extends Model
{
    /**
     * @var string
     */
    public $targetId;

    /**
     * @var string
     */
    public $assocType;

    protected static $constructProperties = [
        'targetId' => 'String',
        'assocType' => 'String'
    ];
}