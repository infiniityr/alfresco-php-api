<?php
/**
 * Nom du fichier : TagPaging.php
 * Projet : alfresco-php-api
 * Date : 16/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class TagPaging extends Model
{
    /**
     * @var TagPagingList
     */
    public $list;

    protected static $constructProperties = [
        'list' => TagPagingList::class
    ];
}