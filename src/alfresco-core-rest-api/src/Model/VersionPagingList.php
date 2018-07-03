<?php
/**
 * Nom du fichier : VersionPagingList.php
 * Projet : alfresco-php-api
 * Date : 16/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class VersionPagingList extends Model
{
    /**
     * @var VersionEntry[]
     */
    public $entries;

    /**
     * @var Pagination
     */
    public $pagination;

    protected static $constructProperties = [
        'entries' => [
            VersionEntry::class
        ],
        'pagination' => Pagination::class
    ];

    /**
     * VersionPagingList constructor.
     * @param VersionEntry[] $entries
     * @param Pagination $pagination
     */
    public function __construct(array $entries = null, Pagination $pagination = null)
    {
        $this->entries = $entries;
        $this->pagination = $pagination;
    }
}