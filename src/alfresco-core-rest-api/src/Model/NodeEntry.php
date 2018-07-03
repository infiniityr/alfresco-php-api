<?php
/**
 * Nom du fichier : NodeEntry.php
 * Projet : alfresco-php-api
 * Date : 17/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class NodeEntry extends Model
{
    /**
     * @var NodeFull
     */
    public $entry;

    protected static $constructProperties = [
        'entry' => NodeFull::class
    ];

    /**
     * NodeEntry constructor.
     * @param NodeFull $entry
     */
    public function __construct(NodeFull $entry = null)
    {
        $this->entry = $entry;
    }
}