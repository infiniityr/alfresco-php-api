<?php
/**
 * Nom du fichier : RatingPaging.php
 * Projet : alfresco-php-api
 * Date : 17/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class RatingPaging extends Model
{
    /**
     * @var RatingPagingList
     */
    public $list;

    protected static $constructProperties = [
        'list' => RatingPagingList::class
    ];
}