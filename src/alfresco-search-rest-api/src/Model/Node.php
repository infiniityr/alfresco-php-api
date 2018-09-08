<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 03/09/2018
 * Time: 19:54
 */

namespace AlfPHPApi\AlfrescoSearchRestApi\Model;


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
    public $isLocked = false;

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
     * @var array
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
        'path' => PathInfo::class
    ];

    public function __construct($id = '', $name = '', $nodeType = '', $isFolder = false, $isFile = true, $modifiedAt = null, $modifiedByUser = null, $createdAt = null, $createdByUser = null) {
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