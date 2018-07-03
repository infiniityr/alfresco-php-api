<?php
/**
 * Nom du fichier : CommentPaging.php
 * Projet : alfresco-php-api
 * Date : 16/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class CommentPaging extends Model
{
    /**
     * @var CommentPagingList
     */
    public $list;

    protected static $constructProperties = [
        'list' => CommentPagingList::class
    ];
}