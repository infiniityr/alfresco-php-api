<?php
/**
 * Nom du fichier : VersionPaging.php
 * Projet : alfresco-php-api
 * Date : 16/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class VersionPaging extends Model
{
    /**
     * @var VersionPagingList
     */
    public $list;

    protected static $constructProperties = [
        'list' => VersionPagingList::class
    ];
}