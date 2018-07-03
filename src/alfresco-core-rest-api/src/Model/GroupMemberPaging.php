<?php
/**
 * Nom du fichier : GroupMemberPaging.php
 * Projet : alfresco-php-api
 * Date : 16/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class GroupMemberPaging extends Model
{
    /**
     * @var GroupMemberPagingList
     */
    public $list;

    protected static $constructProperties = [
        'list' => GroupMemberPagingList::class
    ];
}