<?php
/**
 * Nom du fichier : NodeAssociationEntry.php
 * Projet : alfresco-php-api
 * Date : 17/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class NodeAssociationEntry extends Model
{
    /**
     * @var NodeAssociation
     */
    public $entry;

    protected static $constructProperties = [
        'entry' => NodeAssociation::class
    ];

    /**
     * NodeAssociationEntry constructor.
     * @param NodeAssociation $entry
     */
    public function __construct(NodeAssociation $entry = null)
    {
        $this->entry = $entry;
    }
}