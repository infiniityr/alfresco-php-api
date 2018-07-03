<?php
/**
 * Nom du fichier : CommentPagingList.php
 * Projet : alfresco-php-api
 * Date : 16/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class CommentPagingList extends Model
{
    /**
     * @var CommentEntry[]
     */
    public $entries;

    /**
     * @var Pagination
     */
    public $pagination;

    protected static $constructProperties = [
        'entries' => [CommentEntry::class],
        'pagination' => Pagination::class
    ];

    /**
     * CommentPagingList constructor.
     * @param CommentEntry[] $entries
     * @param Pagination $pagination
     */
    public function __construct(array $entries = null, Pagination $pagination = null)
    {
        $this->entries = $entries;
        $this->pagination = $pagination;
    }
}