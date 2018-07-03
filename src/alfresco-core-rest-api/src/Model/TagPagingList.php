<?php
/**
 * Nom du fichier : TagPagingList.php
 * Projet : alfresco-php-api
 * Date : 16/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class TagPagingList extends Model
{
    /**
     * @var TagEntry[]
     */
    public $entries;

    /**
     * @var Pagination
     */
    public $pagination;

    protected static $constructProperties = [
        'entries' => [
            TagEntry::class
        ],
        'pagination' => Pagination::class
    ];

    /**
     * TagPagingList constructor.
     * @param TagEntry[] $entries
     * @param Pagination $pagination
     */
    public function __construct(array $entries = null, Pagination $pagination = null)
    {
        $this->entries = $entries;
        $this->pagination = $pagination;
    }
}