<?php
/**
 * Nom du fichier : PersonPaging.php
 * Projet : alfresco-php-api
 * Date : 17/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class PersonPaging extends Model
{
    /**
     * @var PersonPagingList
     */
    public $list;

    protected static $constructProperties = [
        'list' => PersonPagingList::class
    ];
}