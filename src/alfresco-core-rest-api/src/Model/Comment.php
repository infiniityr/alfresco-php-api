<?php
/**
 * Nom du fichier : Comment.php
 * Projet : alfresco-php-api
 * Date : 16/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class Comment extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $content;

    /**
     * @var Person
     */
    public $createdBy;

    /**
     * @var \DateTime
     */
    public $createdAt;

    /**
     * @var bool
     */
    public $edited;

    /**
     * @var Person
     */
    public $modifiedBy;

    /**
     * @var \DateTime
     */
    public $modifiedAt;

    /**
     * @var bool
     */
    public $canEdit;

    /**
     * @var bool
     */
    public $canDelete;

    protected static $constructProperties = [
        'id' => 'String',
        'content' => 'String',
        'createdBy' => Person::class,
        'createdAt' => 'Date',
        'edited' => 'Boolean',
        'modifiedBy' => Person::class,
        'modifiedAt' => 'Date',
        'canEdit' => 'Boolean',
        'canDelete' => 'Boolean'
    ];

    /**
     * Comment constructor.
     * @param string $id
     * @param string $content
     * @param Person $createdBy
     * @param \DateTime $createdAt
     * @param bool $edited
     * @param Person $modifiedBy
     * @param \DateTime $modifiedAt
     * @param bool $canEdit
     * @param bool $canDelete
     */
    public function __construct(string $id = null, string $content = null, Person $createdBy = null, \DateTime $createdAt = null, bool $edited = false, Person $modifiedBy = null, \DateTime $modifiedAt = null, bool $canEdit = false, bool $canDelete = false)
    {
        $this->id = $id;
        $this->content = $content;
        $this->createdBy = $createdBy;
        $this->createdAt = $createdAt;
        $this->edited = $edited;
        $this->modifiedBy = $modifiedBy;
        $this->modifiedAt = $modifiedAt;
        $this->canEdit = $canEdit;
        $this->canDelete = $canDelete;
    }
}