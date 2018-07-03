<?php
/**
 * Nom du fichier : Node.php
 * Projet : alfresco-php-api
 * Date : 17/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class Node extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $nodeType;

    /**
     * @var bool
     */
    public $isFolder;

    /**
     * @var bool
     */
    public $isFile;

    /**
     * @var bool
     */
    public $isLocked;

    /**
     * @var \DateTime
     */
    public $modifiedAt;

    /**
     * @var UserInfo
     */
    public $modifiedByUser;

    /**
     * @var \DateTime
     */
    public $createdAt;

    /**
     * @var UserInfo
     */
    public $createdByUser;

    /**
     * @var string
     */
    public $parentId;

    /**
     * @var bool
     */
    public $isLink;

    /**
     * @var ContentInfo
     */
    public $content;

    /**
     * @var string[]
     */
    public $aspectNames;

    /**
     * @var string[]
     */
    public $properties;

    /**
     * @var string[]
     */
    public $allowableOperations;

    /**
     * @var PathInfo
     */
    public $path;

    /**
     * @var PermissionsInfo
     */
    public $permissions;

    protected static $constructProperties = [
        'id' => 'String',
        'name' => 'String',
        'nodeType' => 'String',
        'isFolder' => 'Boolean',
        'isFile' => 'Boolean',
        'isLocked' => 'Boolean',
        'modifiedAt' => 'Date',
        'modifiedByUser' => UserInfo::class,
        'createdAt' => 'Date',
        'createdByUser' => UserInfo::class,
        'parentId' => 'String',
        'isLink' => 'Boolean',
        'content' => ContentInfo::class,
        'aspectNames' => ['String'],
        'properties' => 'Array',
        'allowableOperations' => ['String'],
        'path' => PathInfo::class,
        'permissions' => PermissionsInfo::class
    ];

    /**
     * Node constructor.
     * @param string $id
     * @param string $name
     * @param string $nodeType
     * @param bool $isFolder
     * @param bool $isFile
     * @param \DateTime $modifiedAt
     * @param UserInfo $modifiedByUser
     * @param \DateTime $createdAt
     * @param UserInfo $createdByUser
     */
    public function __construct(string $id = null, string $name = null, string $nodeType = null, bool $isFolder = false, bool $isFile = false, \DateTime $modifiedAt = null, UserInfo $modifiedByUser = null, \DateTime $createdAt = null, UserInfo $createdByUser = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->nodeType = $nodeType;
        $this->isFolder = $isFolder;
        $this->isFile = $isFile;
        $this->modifiedAt = $modifiedAt;
        $this->modifiedByUser = $modifiedByUser;
        $this->createdAt = $createdAt;
        $this->createdByUser = $createdByUser;
    }
}