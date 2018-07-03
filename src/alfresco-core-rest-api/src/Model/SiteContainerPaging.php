<?php
/**
 * Nom du fichier : SiteContainerPaging.php
 * Projet : alfresco-php-api
 * Date : 16/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


/**
 * The SiteContainerPaging model
 * @package AlfPHPApi\AlfrescoCoreRestApi\Model
 * @version 0.0.1
 */
class SiteContainerPaging extends Model
{
    /**
     * @var SitePagingList
     */
    public $list;

    protected static $constructProperties = [
        'list' => SitePagingList::class
    ];
}