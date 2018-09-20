<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 19/09/2018
 * Time: 12:34
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Model;


class ProcessInstanceVariableRepresentation extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $type;

    /**
     * @var array
     */
    public $value;

    protected static $constructProperties = [
        'id' => 'String',
        'type' => 'String',
        'value' => 'Array'
    ];
}