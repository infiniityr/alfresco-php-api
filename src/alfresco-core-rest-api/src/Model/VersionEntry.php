<?php
/**
 * Nom du fichier : VersionEntry.php
 * Projet : alfresco-php-api
 * Date : 16/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class VersionEntry extends Model
{
    /**
     * @var Version
     */
    public $entry;

    protected static $constructProperties = [
        'entry' => Version::class
    ];

    /**
     * VersionEntry constructor.
     * @param Version $entry
     */
    public function __construct(Version $entry = null)
    {
        $this->entry = $entry;
    }
}