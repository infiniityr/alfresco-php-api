<?php
/**
 * Nom du fichier : PersonNetworkPaging.php
 * Projet : alfresco-php-api
 * Date : 17/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class PersonNetworkPaging extends Model
{
    /**
     * @var PersonNetworkPagingList
     */
    public $list;

    protected static $constructProperties = [
        'list' => PersonNetworkPagingList::class
    ];
}