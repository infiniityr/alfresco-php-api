<?php
/**
 * Nom du fichier : DeletedNodeMinimalEntry.php
 * Projet : alfresco-php-api
 * Date : 16/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class DeletedNodeMinimalEntry extends Model
{
    /**
     * @var DeletedNodeMinimalEntry
     */
    public $entry;

    protected static $constructProperties = [
        'entry' => DeletedNodeMinimalEntry::class
    ];
}