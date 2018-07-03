<?php
/**
 * Nom du fichier : DeletedNodesPaging.php
 * Projet : alfresco-php-api
 * Date : 16/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class DeletedNodesPaging extends Model
{
    /**
     * @var  DeletedNodesPagingList
     */
    public $list;

    protected static $constructProperties = [
        'list' => DeletedNodesPagingList::class
    ];
}