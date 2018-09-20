<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 18/09/2018
 * Time: 19:55
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Model;


class FormRepresentation extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var FormDefinitionRepresentation
     */
    public $formDefinition;

    /**
     * @var int
     */
    public $id;

    /**
     * @var \DateTime
     */
    public $lastUpdated;

    /**
     * @var int
     */
    public $lastUpdatedBy;

    /**
     * @var string
     */
    public $lastUpdatedByFullName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $referenceId;

    /**
     * @var int
     */
    public $stencilSetId;

    /**
     * @var int
     */
    public $version;

    protected static $constructProperties = [
        'description' => 'String',
        'formDefinition' => FormDefinitionRepresentation::class,
        'id' => 'Integer',
        'lastUpdated' => 'Date',
        'lastUpdatedBy' => 'Integer',
        'lastUpdatedByFullName' => 'String',
        'name' => 'String',
        'referenceId' => 'Integer',
        'stencilSetId' => 'Integer',
        'version' => 'Integer'
    ];
}