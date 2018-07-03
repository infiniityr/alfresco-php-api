<?php
/**
 * Nom du fichier : ClassPropertyDescription.php
 * Projet : alfresco-php-api
 * Date : 16/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class ClassPropertyDescription extends Model
{
    /**
     * @var string
     */
    public $dataType;

    /**
     * @var string
     */
    public $defaultValue;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $enforced;

    /**
     * @var bool
     */
    public $indexed;

    /**
     * @var bool
     */
    public $mandatory;

    /**
     * @var bool
     */
    public $multiValued;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $protected;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $url;

    protected static $constructProperties = [
        'dataType' => 'String',
        'defaultValue' => 'String',
        'description' => 'String',
        'enforced' => 'Boolean',
        'indexed' => 'Boolean',
        'mandatory' => 'Boolean',
        'multiValued' => 'Boolean',
        'name' => 'String',
        'protected' => 'Boolean',
        'title' => 'String',
        'url' => 'String'
    ];

    /**
     * ClassPropertyDescription constructor.
     * @param string $dataType
     * @param string $defaultValue
     * @param string $description
     * @param bool $enforced
     * @param bool $indexed
     * @param bool $mandatory
     * @param bool $multiValued
     * @param string $name
     * @param bool $protected
     * @param string $title
     * @param string $url
     */
    public function __construct(string $dataType = null, string $defaultValue = null, string $description = null, bool $enforced = false, bool $indexed = false, bool $mandatory = false, bool $multiValued = false, string $name = null, bool $protected = false, string $title = null, string $url = null)
    {
        $this->dataType = $dataType;
        $this->defaultValue = $defaultValue;
        $this->description = $description;
        $this->enforced = $enforced;
        $this->indexed = $indexed;
        $this->mandatory = $mandatory;
        $this->multiValued = $multiValued;
        $this->name = $name;
        $this->protected = $protected;
        $this->title = $title;
        $this->url = $url;
    }
}