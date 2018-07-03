<?php
/**
 * Nom du fichier : RenditionEntry.php
 * Projet : alfresco-php-api
 * Date : 17/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class RenditionEntry extends Model
{
    /**
     * @var Rendition
     */
    public $entry;

    protected static $constructProperties = [
        'entry' => Rendition::class
    ];

    /**
     * RenditionEntry constructor.
     * @param Rendition $entry
     */
    public function __construct(Rendition $entry = null)
    {
        $this->entry = $entry;
    }
}