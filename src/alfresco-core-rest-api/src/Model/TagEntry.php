<?php
/**
 * Nom du fichier : TagEntry.php
 * Projet : alfresco-php-api
 * Date : 16/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class TagEntry extends Model
{
    /**
     * @var Tag
     */
    public $entry;

    protected static $constructProperties = [
        'entry' => Tag::class
    ];

    /**
     * TagEntry constructor.
     * @param Tag $entry
     */
    public function __construct(Tag $entry = null)
    {
        $this->entry = $entry;
    }
}