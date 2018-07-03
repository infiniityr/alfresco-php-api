<?php
/**
 * Nom du fichier : Group.php
 * Projet : alfresco-php-api
 * Date : 16/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class Group extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var bool
     */
    public $isRoot;

    /**
     * @var string[]
     */
    public $zones;

    /**
     * @var string[]
     */
    public $parentIds;

    protected static $constructProperties = [
        'id' => 'String',
        'displayName' => 'String',
        'isRoot' => 'Boolean',
        'zones' => ['String'],
        'parentIds' => ['String']
    ];

    /**
     * Group constructor.
     * @param string $displayName
     * @param bool $isRoot
     * @param string $id
     */
    public function __construct(string $displayName = null, bool $isRoot = false, string $id = null)
    {
        $this->id = $id;
        $this->displayName = $displayName;
        $this->isRoot = $isRoot;
    }
}