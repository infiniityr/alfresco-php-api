<?php
/**
 * Nom du fichier : ContentInfo.php
 * Projet : alfresco-php-api
 * Date : 16/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class ContentInfo extends Model
{
    /**
     * @var string
     */
    public $mimeType;

    /**
     * @var string
     */
    public $mimeTypeName;

    /**
     * @var int
     */
    public $sizeInBytes;

    /**
     * @var string
     */
    public $encoding;

    protected static $constructProperties = [
        'mimeType' => 'String',
        'mimeTypeName' => 'String',
        'sizeInBytes' => 'Integer',
        'encoding' => 'String'
    ];
}