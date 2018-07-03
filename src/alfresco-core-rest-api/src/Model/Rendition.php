<?php
/**
 * Nom du fichier : Rendition.php
 * Projet : alfresco-php-api
 * Date : 17/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class Rendition extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var ContentInfo
     */
    public $content;

    /**
     * @var string
     */
    public $status;

    protected static $constructProperties = [
        'id' => 'String',
        'content' => ContentInfo::class,
        'status' => 'String'
    ];
}