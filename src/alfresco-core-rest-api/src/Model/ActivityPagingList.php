<?php
/**
 * Nom du fichier : ActivityPagingList.php
 * Projet : alfresco-php-api
 * Date : 16/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class ActivityPagingList extends Model
{
    /**
     * @var ActivityEntry[]
     */
    public $entries;

    /**
     * @var Pagination
     */
    public $pagination;

    protected static $constructProperties = [
        'entries' => [
            ActivityEntry::class
        ],
        'pagination' => Pagination::class
    ];

    /**
     * ActivityPagingList constructor.
     * @param ActivityEntry[] $entries
     * @param Pagination $pagination
     */
    public function __construct(array $entries = null, Pagination $pagination = null)
    {
        $this->entries = $entries;
        $this->pagination = $pagination;
    }
}