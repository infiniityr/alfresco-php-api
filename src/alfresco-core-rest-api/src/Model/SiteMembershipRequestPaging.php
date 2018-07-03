<?php
/**
 * Nom du fichier : SiteMembershipRequestPaging.php
 * Projet : alfresco-php-api
 * Date : 16/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class SiteMembershipRequestPaging extends Model
{
    /**
     * @var SiteMembershipRequestPagingList
     */
    public $list;

    protected static $constructProperties = [
        'list' => SiteMembershipRequestPagingList::class
    ];
}