<?php
/**
 * Nom du fichier : NodeSharedLinkPaging.php
 * Projet : alfresco-php-api
 * Date : 17/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class NodeSharedLinkPaging extends Model
{
    /**
     * @var NodeSharedLinkPagingList
     */
    public $list;

    protected static $constructProperties = [
        'list' => NodeSharedLinkPagingList::class
    ];
}