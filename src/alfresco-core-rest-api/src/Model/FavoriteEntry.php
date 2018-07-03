<?php
/**
 * Nom du fichier : FavoriteEntry.php
 * Projet : alfresco-php-api
 * Date : 16/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class FavoriteEntry extends Model
{
    /**
     * @var Favorite
     */
    public $entry;

    protected static $constructProperties = [
        'entry' => Favorite::class
    ];

    /**
     * FavoriteEntry constructor.
     * @param Favorite $entry
     */
    public function __construct(Favorite $entry = null)
    {
        $this->entry = $entry;
    }
}