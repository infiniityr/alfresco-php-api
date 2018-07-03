<?php
/**
 * Nom du fichier : NodeSharedLinkEntry.php
 * Projet : alfresco-php-api
 * Date : 17/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class NodeSharedLinkEntry extends Model
{
    /**
     * @var NodeSharedLink
     */
    public $entry;

    protected static $constructProperties = [
        'entry' => NodeSharedLink::class
    ];

    /**
     * NodeSharedLinkEntry constructor.
     * @param NodeSharedLink $entry
     */
    public function __construct(NodeSharedLink $entry = null)
    {
        $this->entry = $entry;
    }
}