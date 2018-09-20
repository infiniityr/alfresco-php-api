<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 18/09/2018
 * Time: 20:15
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Model;


class FormScopeRepresentation extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var FormFieldRepresentation[]
     */
    public $fieldVariables;

    /**
     * @var FormFieldRepresentation[]
     */
    public $fields;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var FormOutcomeRepresentation[]
     */
    public $outcomes;

    protected static $constructProperties = [
        'description' => 'String',
        'fieldVariables' => [FormFieldRepresentation::class],
        'fields' => [FormFieldRepresentation::class],
        'id' => 'Integer',
        'name' => 'Integer',
        'outcomes' => [FormOutcomeRepresentation::class]
    ];
}