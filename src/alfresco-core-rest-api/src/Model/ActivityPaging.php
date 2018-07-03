<?php
/**
 * Nom du fichier : ActivityPaging.php
 * Projet : alfresco-php-api
 * Date : 16/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class ActivityPaging extends Model
{
    /**
     * @var ActivityPagingList
     */
    public $list;

    protected static $constructProperties = [
        'list' => ActivityPagingList::class
    ];
}