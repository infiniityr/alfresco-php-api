<?php
/**
 * Nom du fichier : NodeAssocPagingList.php
 * Projet : alfresco-php-api
 * Date : 17/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class NodeAssocPagingList extends Model
{
    /**
     * @var NodeAssocMinimalEntry[]
     */
    public $entries;

    /**
     * @var Pagination
     */
    public $pagination;

    protected static $constructProperties = [
        'entries' => [NodeAssocMinimalEntry::class],
        'pagination' => Pagination::class
    ];
}