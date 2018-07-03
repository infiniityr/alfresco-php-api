<?php
/**
 * Nom du fichier : FavoriteTarget.php
 * Projet : alfresco-php-api
 * Date : 16/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class FavoriteTarget extends Model
{
    /**
     * @var FavoriteTargetSite
     */
    public $site;

    protected static $constructProperties = [
        'site' => FavoriteTargetSite::class
    ];
}