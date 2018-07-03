<?php
/**
 * Nom du fichier : PersonPagingList.php
 * Projet : alfresco-php-api
 * Date : 17/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class PersonPagingList extends Model
{
    /**
     * @var PersonEntry[]
     */
    public $entries;

    /**
     * @var Pagination
     */
    public $pagination;

    protected static $constructProperties = [
        'entries' => [PersonEntry::class],
        'pagination' => Pagination::class
    ];
}