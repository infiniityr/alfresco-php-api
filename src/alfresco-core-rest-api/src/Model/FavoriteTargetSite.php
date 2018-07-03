<?php
/**
 * Nom du fichier : FavoriteTargetSite.php
 * Projet : alfresco-php-api
 * Date : 16/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class FavoriteTargetSite extends Model
{
    /**
     * @var string
     */
    public $guid;

    protected static $constructProperties = [
        'guid' => 'String'
    ];
}