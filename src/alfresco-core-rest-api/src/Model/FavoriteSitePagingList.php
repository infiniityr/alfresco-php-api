<?php
/**
 * Nom du fichier : FavoriteSitePagingList.php
 * Projet : alfresco-php-api
 * Date : 16/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class FavoriteSitePagingList extends Model
{
    /**
     * @var FavoriteSiteEntry[]
     */
    public $entries;

    /**
     * @var Pagination
     */
    public $pagination;

    protected static $constructProperties = [
        'entries' => [FavoriteSiteEntry::class],
        'pagination' => Pagination::class
    ];
}