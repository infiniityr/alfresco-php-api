<?php
/**
 * Nom du fichier : GroupsEntry.php
 * Projet : alfresco-php-api
 * Date : 16/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class GroupsEntry extends Model
{
    /**
     * @var Group
     */
    public $entry;

    protected static $constructProperties = [
        'entry' => Group::class
    ];

    /**
     * GroupsEntry constructor.
     * @param Group $entry
     */
    public function __construct(Group $entry = null)
    {
        $this->entry = $entry;
    }
}