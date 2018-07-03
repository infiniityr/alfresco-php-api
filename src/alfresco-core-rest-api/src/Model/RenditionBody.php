<?php
/**
 * Nom du fichier : RenditionBody.php
 * Projet : alfresco-php-api
 * Date : 17/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class RenditionBody extends Model
{
    /**
     * @var string
     */
    public $id;

    protected static $constructProperties = [
        'id' => 'String'
    ];
}