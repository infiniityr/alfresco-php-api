<?php
/**
 * Nom du fichier : GroupsPaging.php
 * Projet : alfresco-php-api
 * Date : 16/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class GroupsPaging extends Model
{
    /**
     * @var GroupsPagingList
     */
    public $list;

    protected static $constructProperties = [
        'list' => GroupsPagingList::class
    ];
}