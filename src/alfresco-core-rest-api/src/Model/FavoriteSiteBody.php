<?php
/**
 * Nom du fichier : FavoriteSiteBody.php
 * Projet : alfresco-php-api
 * Date : 16/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class FavoriteSiteBody extends Model
{
    /**
     * @var string
     */
    public $id;

    protected static $constructProperties = [
        'id' => 'String'
    ];
}