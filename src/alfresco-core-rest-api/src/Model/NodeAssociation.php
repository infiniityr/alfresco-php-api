<?php
/**
 * Nom du fichier : NodeAssociation.php
 * Projet : alfresco-php-api
 * Date : 17/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class NodeAssociation extends Node
{
    /**
     * @var AssociationInfo
     */
    public $association;

    public function __construct(string $id = null, string $name = null, string $nodeType = null, bool $isFolder = false, bool $isFile = false, \DateTime $modifiedAt = null, UserInfo $modifiedByUser = null, \DateTime $createdAt = null, UserInfo $createdByUser = null)
    {
        parent::__construct($id, $name, $nodeType, $isFolder, $isFile, $modifiedAt, $modifiedByUser, $createdAt, $createdByUser);
        static::$constructProperties = array_merge(parent::$constructProperties, [
            'association' => AssociationInfo::class
        ]);
    }
}