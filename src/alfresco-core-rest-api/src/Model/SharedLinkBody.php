<?php
/**
 * Nom du fichier : SharedLinkBody.php
 * Projet : alfresco-php-api
 * Date : 17/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class SharedLinkBody extends Model
{
    /**
     * @var string
     */
    public $nodeId;

    protected static $constructProperties = [
        'nodeId' => 'String'
    ];
}