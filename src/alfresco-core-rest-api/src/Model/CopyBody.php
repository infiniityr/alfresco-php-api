<?php
/**
 * Nom du fichier : CopyBody.php
 * Projet : alfresco-php-api
 * Date : 16/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class CopyBody extends Model
{
    /**
     * @var string
     */
    public $targetParentId;

    /**
     * @var string
     */
    public $name;

    protected static $constructProperties = [
        'targetParentId' => 'String',
        'name' => 'String'
    ];
}