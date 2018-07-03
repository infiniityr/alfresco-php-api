<?php
/**
 * Nom du fichier : NodeChildAssociationEntry.php
 * Projet : alfresco-php-api
 * Date : 17/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class NodeChildAssociationEntry extends Model
{
    /**
     * @var NodeChildAssociation
     */
    public $entry;

    protected static $constructProperties = [
        'entry' => NodeChildAssociation::class
    ];

    /**
     * NodeChildAssociationEntry constructor.
     * @param NodeChildAssociation $entry
     */
    public function __construct(NodeChildAssociation $entry = null)
    {
        $this->entry = $entry;
    }
}