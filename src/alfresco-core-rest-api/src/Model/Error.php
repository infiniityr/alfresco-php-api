<?php
/**
 * Nom du fichier : Error.php
 * Projet : alfresco-php-api
 * Date : 16/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class Error extends Model
{
    /**
     * @var ErrorError
     */
    public $error;

    protected static $constructProperties = [
        'error' => ErrorError::class
    ];
}