<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 19/09/2018
 * Time: 13:05
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Model;


use AlfPHPApi\AlfrescoCoreRestApi\Model\Model;

class ReportParametersDefinition extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $definition;

    /**
     * @var string
     */
    public $created;

    protected static $constructProperties = [
        'id' => 'Integer',
        'name' => 'String',
        'definition' => 'String',
        'created' => 'String'
    ];
}