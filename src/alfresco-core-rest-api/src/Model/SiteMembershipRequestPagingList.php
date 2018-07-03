<?php
/**
 * Nom du fichier : SiteMembershipRequestPagingList.php
 * Projet : alfresco-php-api
 * Date : 16/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class SiteMembershipRequestPagingList extends Model
{
    /**
     * @var SiteMembershipRequestEntry[]
     */
    public $entries;

    /**
     * @var Pagination
     */
    public $pagination;

    protected static $constructProperties = [
        'entries' => [
            SiteMembershipRequestEntry::class
        ],
        'pagination' => Pagination::class
    ];

    /**
     * SiteMembershipRequestPagingList constructor.
     * @param SiteMembershipRequestEntry[] $entries
     * @param Pagination $pagination
     */
    public function __construct(array $entries = null, Pagination $pagination = null)
    {
        $this->entries = $entries;
        $this->pagination = $pagination;
    }
}