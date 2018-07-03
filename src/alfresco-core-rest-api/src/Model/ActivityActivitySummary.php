<?php
/**
 * Nom du fichier : ActivityActivitySummary.php
 * Projet : alfresco-php-api
 * Date : 16/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class ActivityActivitySummary extends Model
{
    /**
     * @var string
     */
    public $firstName;

    /**
     * @var string
     */
    public $lastName;

    /**
     * @var string
     */
    public $parentObjectId;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $objectId;

    protected static $constructProperties = [
        'firstName' => 'String',
        'lastName' => 'String',
        'parentObjectId' => 'String',
        'title' => 'String',
        'objectId' => 'String'
    ];
}