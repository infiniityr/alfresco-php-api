<?php
/**
 * Nom du fichier : DeletedNodeEntry.php
 * Projet : alfresco-php-api
 * Date : 16/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class DeletedNodeEntry extends Model
{
    /**
     * @var DeletedNode
     */
    public $entry;

    protected static $constructProperties = [
        'entry' => DeletedNode::class
    ];
}