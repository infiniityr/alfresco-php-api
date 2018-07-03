<?php
/**
 * Nom du fichier : NodeChildAssociationPaging.php
 * Projet : alfresco-php-api
 * Date : 17/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class NodeChildAssociationPaging extends Model
{
    /**
     * @var NodeChildAssociationPagingList
     */
    public $list;

    protected static $constructProperties = [
        'list' => NodeChildAssociationPagingList::class
    ];
}