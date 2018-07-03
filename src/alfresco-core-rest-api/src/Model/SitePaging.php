<?php
/**
 * Nom du fichier : SitePaging.php
 * Projet : alfresco-php-api
 * Date : 16/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class SitePaging extends Model
{
    /**
     * @var SitePagingList
     */
    public $list;

    protected static $constructProperties = [
        'list' => SitePagingList::class
    ];
}