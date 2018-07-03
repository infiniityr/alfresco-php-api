<?php
/**
 * Nom du fichier : SiteEntry.php
 * Projet : alfresco-php-api
 * Date : 16/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class SiteEntry extends Model
{
    /**
     * @var Site
     */
    public $entry;

    protected static $constructProperties = [
        'entry' => Site::class
    ];

    /**
     * SiteEntry constructor.
     * @param Site $entry
     */
    public function __construct(Site $entry = null)
    {
        $this->entry = $entry;
    }
}