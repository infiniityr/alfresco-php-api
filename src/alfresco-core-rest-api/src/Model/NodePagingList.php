<?php
/**
 * Nom du fichier : NodePagingList.php
 * Projet : alfresco-php-api
 * Date : 17/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class NodePagingList extends Model
{
    /**
     * @var NodeMinimalEntry[]
     */
    public $entries;

    /**
     * @var Pagination
     */
    public $pagination;

    protected static $constructProperties = [
        'entries' => [NodeMinimalEntry::class],
        'pagination' => Pagination::class
    ];
}