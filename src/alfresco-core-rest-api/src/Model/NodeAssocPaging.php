<?php
/**
 * Nom du fichier : NodeAssocPaging.php
 * Projet : alfresco-php-api
 * Date : 17/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class NodeAssocPaging extends Model
{
    /**
     * @var NodeAssocPagingList
     */
    public $list;

    protected static $constructProperties = [
        'list' => NodeAssocPagingList::class
    ];
}