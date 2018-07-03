<?php
/**
 * Nom du fichier : MinimalNode.php
 * Projet : alfresco-php-api
 * Date : 16/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class MinimalNode extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $parentId;

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
     * @var ContentInfo
     */
    public $content;

    /**
     * @var PathElement
     */
    public $path;

    protected static $constructProperties = [
        'id' => 'String',
        'parentId' => 'String',
        'name' => 'String',
        'nodeType' => 'String',
        'isFolder' => 'Boolean',
        'isFile' => 'Boolean',
        'modifiedAt' => 'Date',
        'modifiedByUser' => UserInfo::class,
        'createdAt' => 'Date',
        'createdByUser' => UserInfo::class,
        'content' => ContentInfo::class,
        'path' => PathElement::class
    ];
}