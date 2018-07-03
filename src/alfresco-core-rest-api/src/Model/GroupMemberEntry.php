<?php
/**
 * Nom du fichier : GroupMemberEntry.php
 * Projet : alfresco-php-api
 * Date : 16/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class GroupMemberEntry extends Model
{
    /**
     * @var GroupMember
     */
    public $entry;

    protected static $constructProperties = [
        'entry' => GroupMember::class
    ];

    /**
     * GroupMemberEntry constructor.
     * @param GroupMember $entry
     */
    public function __construct(GroupMember $entry = null)
    {
        $this->entry = $entry;
    }
}