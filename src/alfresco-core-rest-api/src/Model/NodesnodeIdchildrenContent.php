<?php
/**
 * Nom du fichier : NodesnodeIdchildrenContent.php
 * Projet : alfresco-php-api
 * Date : 17/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class NodesnodeIdchildrenContent extends Model
{
    /**
     * @var string
     */
    public $mimeType;

    /**
     * @var string
     */
    public $encoding;

    protected static $constructProperties = [
        'mimeType' => 'String',
        'encoding' => 'String'
    ];
}