<?php
/**
 * Nom du fichier : NodeChildAssociationPagingList.php
 * Projet : alfresco-php-api
 * Date : 17/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class NodeChildAssociationPagingList extends Model
{
    /**
     * @var Pagination
     */
    public $pagination;

    /**
     * @var NodeChildAssociationEntry[]
     */
    public $entries;

    /**
     * @var Node
     */
    public $source;

    protected static $constructProperties = [
        'pagination' => Pagination::class,
        'entries' => [NodeChildAssociationEntry::class],
        'source' => Node::class
    ];
}