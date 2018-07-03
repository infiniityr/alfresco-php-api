<?php
/**
 * Nom du fichier : NodeSharedLinkPagingList.php
 * Projet : alfresco-php-api
 * Date : 17/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class NodeSharedLinkPagingList extends Model
{
    /**
     * @var NodeSharedLinkEntry[]
     */
    public $entries;

    /**
     * @var Pagination
     */
    public $pagination;

    protected static $constructProperties = [
        'entries' => [NodeSharedLinkEntry::class],
        'pagination' => Pagination::class
    ];

    /**
     * NodeSharedLinkPagingList constructor.
     * @param NodeSharedLinkEntry[] $entries
     * @param Pagination $pagination
     */
    public function __construct(array $entries = null, Pagination $pagination = null)
    {
        $this->entries = $entries;
        $this->pagination = $pagination;
    }
}