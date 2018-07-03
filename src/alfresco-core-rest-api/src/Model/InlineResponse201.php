<?php
/**
 * Nom du fichier : InlineResponse201.php
 * Projet : alfresco-php-api
 * Date : 16/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class InlineResponse201 extends Model
{
    /**
     * @var InlineResponse201Entry
     */
    public $entry;

    protected static $constructProperties = [
        'entry' => InlineResponse201Entry::class
    ];
}