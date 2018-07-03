<?php
/**
 * Nom du fichier : Version.php
 * Projet : alfresco-php-api
 * Date : 16/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class Version extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $versionComment;

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
     * @var Person
     */
    public $modifiedByUser;

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

    protected static $constructProperties = [
        'id' => 'String',
        'versionComment' => 'String',
        'name' => 'String',
        'nodeType' => 'String',
        'isFolder' => 'Boolean',
        'isFile' => 'Boolean',
        'modifiedAt' => 'Date',
        'modifiedByUser' => Person::class,
        'content' => ContentInfo::class,
        'aspectNames' => ['String'],
        'properties' => ['String' => 'String']
    ];

    /**
     * Version constructor.
     * @param string $id
     * @param string $name
     * @param string $nodeType
     * @param bool $isFolder
     * @param bool $isFile
     * @param \DateTime $modifiedAt
     * @param Person $modifiedByUser
     */
    public function __construct(string $id = null, string $name = null, string $nodeType = null, bool $isFolder = false, bool $isFile = false, \DateTime $modifiedAt = null, Person $modifiedByUser = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->nodeType = $nodeType;
        $this->isFolder = $isFolder;
        $this->isFile = $isFile;
        $this->modifiedAt = $modifiedAt;
        $this->modifiedByUser = $modifiedByUser;
    }
}