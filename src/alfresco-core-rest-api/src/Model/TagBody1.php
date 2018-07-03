<?php
/**
 * Nom du fichier : TagBody1.php
 * Projet : alfresco-php-api
 * Date : 16/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class TagBody1 extends Model
{
    /**
     * @var string
     */
    public $tag;

    protected static $constructProperties = [
        'tag' => 'String'
    ];
}