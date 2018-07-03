<?php
/**
 * Nom du fichier : PreferencePaging.php
 * Projet : alfresco-php-api
 * Date : 17/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class PreferencePaging extends Model
{
    /**
     * @var PreferencePagingList
     */
    public $list;

    protected static $constructProperties = [
        'list' => PreferencePagingList::class
    ];
}