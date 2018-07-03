<?php
/**
 * Nom du fichier : RenditionPaging.php
 * Projet : alfresco-php-api
 * Date : 17/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class RenditionPaging extends Model
{
    /**
     * @var RenditionPagingList
     */
    public $list;

    protected static $constructProperties = [
        'list' => RenditionPagingList::class
    ];
}