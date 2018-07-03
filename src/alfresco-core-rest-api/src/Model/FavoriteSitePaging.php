<?php
/**
 * Nom du fichier : FavoriteSitePaging.php
 * Projet : alfresco-php-api
 * Date : 16/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class FavoriteSitePaging extends Model
{
    /**
     * @var FavoriteSitePagingList
     */
    public $list;

    protected static $constructProperties = [
        'list' => FavoriteSitePagingList::class
    ];
}