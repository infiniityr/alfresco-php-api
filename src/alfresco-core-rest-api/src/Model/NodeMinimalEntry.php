<?php
/**
 * Nom du fichier : NodeMinimalEntry.php
 * Projet : alfresco-php-api
 * Date : 17/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class NodeMinimalEntry extends Model
{
    /**
     * @var NodeMinimal
     */
    public $entry;

    protected static $constructProperties = [
        'entry' => NodeMinimal::class
    ];

    /**
     * NodeMinimalEntry constructor.
     * @param NodeMinimal $entry
     */
    public function __construct(NodeMinimal $entry = null)
    {
        $this->entry = $entry;
    }
}