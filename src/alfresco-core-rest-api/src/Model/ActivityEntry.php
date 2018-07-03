<?php
/**
 * Nom du fichier : ActivityEntry.php
 * Projet : alfresco-php-api
 * Date : 16/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class ActivityEntry extends Model
{
    /**
     * @var Activity
     */
    public $entry;

    protected static $constructProperties = [
        'entry' => Activity::class
    ];

    /**
     * ActivityEntry constructor.
     * @param Activity $entry
     */
    public function __construct(Activity $entry = null)
    {
        $this->entry = $entry;
    }
}