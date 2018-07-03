<?php
/**
 * Nom du fichier : PersonEntry.php
 * Projet : alfresco-php-api
 * Date : 17/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class PersonEntry extends Model
{
    /**
     * @var Person
     */
    public $entry;

    protected static $constructProperties = [
        'entry' => Person::class
    ];

    /**
     * PersonEntry constructor.
     * @param Person $entry
     */
    public function __construct(Person $entry = null)
    {
        $this->entry = $entry;
    }
}