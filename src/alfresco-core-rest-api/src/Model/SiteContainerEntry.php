<?php
/**
 * Nom du fichier : SiteContainerEntry.php
 * Projet : alfresco-php-api
 * Date : 16/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


/**
 * The SiteContainerEntry model.
 * @package AlfPHPApi\AlfrescoCoreRestApi\Model
 * @version 0.0.1
 */
class SiteContainerEntry extends Model
{
    /**
     * @var SiteContainer
     */
    public $entry;

    protected static $constructProperties = [
        'entry' => SiteContainer::class
    ];

    /**
     * SiteContainerEntry constructor.
     * @param SiteContainer $entry
     */
    public function __construct(SiteContainer $entry = null)
    {
        $this->entry = $entry;
    }
}