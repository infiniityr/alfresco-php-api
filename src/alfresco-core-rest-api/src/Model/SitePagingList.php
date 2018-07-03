<?php
/**
 * Nom du fichier : SitePagingList.php
 * Projet : alfresco-php-api
 * Date : 16/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class SitePagingList extends Model
{
    /**
     * @var Pagination
     */
    public $pagination;

    /**
     * @var SiteEntry[]
     */
    public $entries;

    protected static $constructProperties = [
        'entries' => [SiteEntry::class],
        'pagination' => Pagination::class
    ];

    /**
     * SitePagingList constructor.
     * @param Pagination $pagination
     */
    public function __construct(Pagination $pagination = null)
    {
        $this->pagination = $pagination;
    }
}