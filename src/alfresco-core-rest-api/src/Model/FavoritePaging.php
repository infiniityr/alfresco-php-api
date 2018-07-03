<?php
/**
 * Nom du fichier : FavoritePaging.php
 * Projet : alfresco-php-api
 * Date : 16/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class FavoritePaging extends Model
{
    /**
     * @var FavoritePagingList
     */
    public $list;

    protected static $constructProperties = [
        'list' => FavoritePagingList::class
    ];
}