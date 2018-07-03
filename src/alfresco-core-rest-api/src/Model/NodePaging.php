<?php
/**
 * Nom du fichier : NodePaging.php
 * Projet : alfresco-php-api
 * Date : 17/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class NodePaging extends Model
{
    /**
     * @var NodePagingList
     */
    public $list;

    protected static $constructProperties = [
        'list' => NodePagingList::class
    ];
}