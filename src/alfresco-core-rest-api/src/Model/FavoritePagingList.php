<?php
/**
 * Nom du fichier : FavoritePagingList.php
 * Projet : alfresco-php-api
 * Date : 16/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class FavoritePagingList extends Model
{
    /**
     * @var FavoriteEntry[]
     */
    public $entries;

    /**
     * @var Pagination
     */
    public $pagination;

    protected static $constructProperties = [
        'entries' => [FavoriteEntry::class],
        'pagination' => Pagination::class
    ];

    /**
     * FavoritePagingList constructor.
     * @param FavoriteEntry[] $entries
     * @param Pagination $pagination
     */
    public function __construct(array $entries = [], Pagination $pagination = null)
    {
        $this->entries = $entries;
        $this->pagination = $pagination;
    }
}