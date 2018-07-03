<?php
/**
 * Nom du fichier : FavoriteBody.php
 * Projet : alfresco-php-api
 * Date : 16/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class FavoriteBody extends Model
{
    /**
     * @var array
     */
    public $target;

    protected static $constructProperties = [
        'target' => 'Array'
    ];

    /**
     * FavoriteBody constructor.
     * @param array $target
     */
    public function __construct(array $target = [])
    {
        $this->target = $target;
    }
}