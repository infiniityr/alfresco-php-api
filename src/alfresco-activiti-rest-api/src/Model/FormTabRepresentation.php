<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 18/09/2018
 * Time: 22:19
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Model;


class FormTabRepresentation extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $title;

    /**
     * @var ConditionRepresentation
     */
    public $visibilityCondition;

    protected static $constructProperties = [
        'id' => 'String',
        'title' => 'String',
        'visibilityCondition' => ConditionRepresentation::class
    ];
}