<?php
/**
 * Nom du fichier : PreferenceEntry.php
 * Projet : alfresco-php-api
 * Date : 17/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class PreferenceEntry extends Model
{
    /**
     * @var Preference
     */
    public $entry;

    protected static $constructProperties = [
        'entry' => Preference::class
    ];

    /**
     * PreferenceEntry constructor.
     * @param Preference $entry
     */
    public function __construct(Preference $entry = null)
    {
        $this->entry = $entry;
    }
}