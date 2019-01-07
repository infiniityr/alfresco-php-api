<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 15/09/2018
 * Time: 17:57
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Model;


use AlfPHPApi\AlfrescoCoreRestApi\Model\Model;

class CompleteFormRepresentation extends Model
{
    /**
     * @var string
     */
    public $outcome;

    /**
     * @var array
     */
    public $values;

    protected static $constructProperties = [
        'outcome' => 'String',
        'values' => 'Array'
    ];
}