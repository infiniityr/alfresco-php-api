<?php
/**
 * Nom du fichier : PreferencePagingList.php
 * Projet : alfresco-php-api
 * Date : 17/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class PreferencePagingList extends Model
{
    /**
     * @var PreferenceEntry[]
     */
    public $entries;

    /**
     * @var Pagination
     */
    public $pagination;

    protected static $constructProperties = [
        'entries' => [PreferenceEntry::class],
        'pagination' => Pagination::class
    ];

    /**
     * PreferencePagingList constructor.
     * @param PreferenceEntry[] $entries
     * @param Pagination $pagination
     */
    public function __construct(array $entries = [], Pagination $pagination = null)
    {
        $this->entries = $entries;
        $this->pagination = $pagination;
    }
}