<?php
/**
 * Nom du fichier : NodeAssociationPaging.php
 * Projet : alfresco-php-api
 * Date : 17/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class NodeAssociationPaging extends Model
{
    /**
     * @var NodeAssociationPagingList
     */
    public $list;

    protected static $constructProperties = [
        'list' => NodeAssociationPagingList::class
    ];
}