<?php
/**
 * Nom du fichier : DeletedNodesPagingList.php
 * Projet : alfresco-php-api
 * Date : 16/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class DeletedNodesPagingList extends Model
{
    /**
     * @var DeletedNodeMinimalEntry[]
     */
    public $entries;

    /**
     * @var Pagination
     */
    public $pagination;

    protected static $constructProperties = [
        'entries' => [DeletedNodeMinimalEntry::class],
        'pagination' => Pagination::class
    ];
}