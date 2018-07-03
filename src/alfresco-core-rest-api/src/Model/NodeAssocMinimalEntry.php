<?php
/**
 * Nom du fichier : NodeAssocMinimalEntry.php
 * Projet : alfresco-php-api
 * Date : 17/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class NodeAssocMinimalEntry extends Model
{
    /**
     * @var NodeAssocMinimal
     */
    public $entry;

    protected static $constructProperties = [
        'entry' => NodeAssocMinimal::class
    ];

    /**
     * NodeAssocMinimalEntry constructor.
     * @param NodeAssocMinimal $entry
     */
    public function __construct(NodeAssocMinimal $entry = null)
    {
        $this->entry = $entry;
    }
}