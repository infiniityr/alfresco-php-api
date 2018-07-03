<?php
/**
 * Nom du fichier : SiteMemberEntry.php
 * Projet : alfresco-php-api
 * Date : 16/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class SiteMemberEntry extends Model
{
    /**
     * @var SiteMember
     */
    public $entry;

    protected static $constructProperties = [
        'entry' => SiteMember::class
    ];

    /**
     * SiteMemberEntry constructor.
     * @param SiteMember $entry
     */
    public function __construct(SiteMember $entry = null)
    {
        $this->entry = $entry;
    }
}