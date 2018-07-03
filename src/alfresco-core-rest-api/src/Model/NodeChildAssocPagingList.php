<?php
/**
 * Nom du fichier : NodeChildAssocPagingList.php
 * Projet : alfresco-php-api
 * Date : 17/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class NodeChildAssocPagingList extends Model
{
    /**
     * @var NodeChildAssocMinimalEntry[]
     */
    public $entries;

    /**
     * @var Pagination
     */
    public $pagination;

    protected static $constructProperties = [
        'entries' => [NodeChildAssocMinimalEntry::class],
        'pagination' => Pagination::class
    ];
}