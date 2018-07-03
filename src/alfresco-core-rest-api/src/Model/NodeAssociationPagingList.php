<?php
/**
 * Nom du fichier : NodeAssociationPagingList.php
 * Projet : alfresco-php-api
 * Date : 17/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class NodeAssociationPagingList extends Model
{
    /**
     * @var Pagination
     */
    public $pagination;

    /**
     * @var NodeAssociationEntry
     */
    public $entries;

    /**
     * @var Node
     */
    public $source;

    protected static $constructProperties = [
        'pagination' => Pagination::class,
        'entries' => NodeAssociationEntry::class,
        'source' => Node::class
    ];
}