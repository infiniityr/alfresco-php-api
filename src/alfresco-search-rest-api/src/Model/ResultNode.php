<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 06/09/2018
 * Time: 16:15
 */

namespace AlfPHPApi\AlfrescoSearchRestApi\Model;


class ResultNode extends Model
{
    /**
     * @var SearchEntry
     */
    public $search;

    /**
     * @var UserInfo
     */
    public $archivedByUser;

    /**
     * @var \DateTime
     */
    public $archivedAt;

    /**
     * @var string
     */
    public $versionLabel;

    /**
     * @var string
     */
    public $versionComment;

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
        'search' => SearchEntry::class,
        'archivedByUser' => UserInfo::class,
        'archivedAt' => 'Date',
        'versionLabel' => 'String',
        'versionComment' => 'String',
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
}