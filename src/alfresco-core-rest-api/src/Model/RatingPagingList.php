<?php
/**
 * Nom du fichier : RatingPagingList.php
 * Projet : alfresco-php-api
 * Date : 17/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class RatingPagingList extends Model
{
    /**
     * @var RatingEntry[]
     */
    public $entries;

    /**
     * @var Pagination
     */
    public $pagination;

    protected static $constructProperties = [
        'entries' => [RatingEntry::class],
        'pagination' => Pagination::class
    ];

    /**
     * RatingPagingList constructor.
     * @param RatingEntry[] $entries
     * @param Pagination $pagination
     */
    public function __construct(array $entries = null, Pagination $pagination = null)
    {
        $this->entries = $entries;
        $this->pagination = $pagination;
    }
}