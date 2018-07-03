<?php
/**
 * Nom du fichier : NodeChildAssocMinimalEntry.php
 * Projet : alfresco-php-api
 * Date : 17/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class NodeChildAssocMinimalEntry extends Model
{
    /**
     * @var NodeChildAssocMinimal
     */
    public $entry;

    protected static $constructProperties = [
        'entry' => NodeChildAssocMinimal::class
    ];

    /**
     * NodeChildAssocMinimalEntry constructor.
     * @param NodeChildAssocMinimal $entry
     */
    public function __construct(NodeChildAssocMinimal $entry = null)
    {
        $this->entry = $entry;
    }
}