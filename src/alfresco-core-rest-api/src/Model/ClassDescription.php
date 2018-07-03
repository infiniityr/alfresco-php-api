<?php
/**
 * Nom du fichier : ClassDescription.php
 * Projet : alfresco-php-api
 * Date : 16/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class ClassDescription extends Model
{
    /**
     * @var array
     */
    public $associations;

    /**
     * @var array
     */
    public $childassociations;

    /**
     * @var array
     */
    public $defaultAspects;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $isAspect;

    /**
     * @var bool
     */
    public $isContainer;

    /**
     * @var string
     */
    public $name;

    /**
     * @var array
     */
    public $parent;

    /**
     * @var array
     */
    public $properties;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $url;

    protected static $constructProperties = [
        'associations' => 'Array',
        'childassociations' => 'Array',
        'defaultAspects' => 'Array',
        'description' => 'String',
        'isAspect' => 'Boolean',
        'isContainer' => 'Boolean',
        'name' => 'String',
        'parent' => 'Array',
        'properties' => ['String' => ClassPropertyDescription::class],
        'title' => 'String',
        'url' => 'String'
    ];

    /**
     * ClassDescription constructor.
     * @param array $associations
     * @param array $childassociations
     * @param array $defaultAspects
     * @param string $description
     * @param bool $isAspect
     * @param bool $isContainer
     * @param string $name
     * @param array $parent
     * @param array $properties
     * @param string $title
     * @param string $url
     */
    public function __construct(array $associations = [], array $childassociations = [], array $defaultAspects = [], string $description = null, bool $isAspect = false, bool $isContainer = false, string $name = null, array $parent = [], array $properties = [], string $title = null, string $url = null)
    {
        $this->associations = $associations;
        $this->childassociations = $childassociations;
        $this->defaultAspects = $defaultAspects;
        $this->description = $description;
        $this->isAspect = $isAspect;
        $this->isContainer = $isContainer;
        $this->name = $name;
        $this->parent = $parent;
        $this->properties = $properties;
        $this->title = $title;
        $this->url = $url;
    }
}