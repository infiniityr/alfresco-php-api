<?php
/**
 * Nom du fichier : PersonNetworkPagingList.php
 * Projet : alfresco-php-api
 * Date : 17/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class PersonNetworkPagingList extends Model
{
    /**
     * @var PersonNetworkEntry[]
     */
    public $entries;

    /**
     * @var Pagination
     */
    public $pagination;

    protected static $constructProperties = [
        'entries' => [PersonNetworkEntry::class],
        'pagination' => Pagination::class
    ];
}