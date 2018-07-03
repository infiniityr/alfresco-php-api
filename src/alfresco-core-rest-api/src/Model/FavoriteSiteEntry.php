<?php
/**
 * Nom du fichier : FavoriteSiteEntry.php
 * Projet : alfresco-php-api
 * Date : 16/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class FavoriteSiteEntry extends Model
{
    /**
     * @var FavoriteSite
     */
    public $entry;

    protected static $constructProperties = [
        'entry' => FavoriteSite::class
    ];

    /**
     * FavoriteSiteEntry constructor.
     * @param FavoriteSite $entry
     */
    public function __construct(FavoriteSite $entry = null)
    {
        $this->entry = $entry;
    }
}