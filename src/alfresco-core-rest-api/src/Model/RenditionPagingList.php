<?php
/**
 * Nom du fichier : RenditionPagingList.php
 * Projet : alfresco-php-api
 * Date : 17/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class RenditionPagingList extends Model
{
    /**
     * @var RenditionEntry[]
     */
    public $entries;

    /**
     * @var Pagination
     */
    public $pagination;

    protected static $constructProperties = [
        'entries' => [RenditionEntry::class],
        'pagination' => Pagination::class
    ];
}