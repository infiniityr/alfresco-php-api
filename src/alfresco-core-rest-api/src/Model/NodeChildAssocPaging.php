<?php
/**
 * Nom du fichier : NodeChildAssocPaging.php
 * Projet : alfresco-php-api
 * Date : 17/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class NodeChildAssocPaging extends Model
{
    /**
     * @var NodeChildAssocPagingList
     */
    public $list;

    protected static $constructProperties = [
        'list' => NodeChildAssocPagingList::class
    ];
}