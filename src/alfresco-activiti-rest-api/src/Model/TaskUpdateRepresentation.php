<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 19/09/2018
 * Time: 17:54
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Model;


use AlfPHPApi\AlfrescoCoreRestApi\Model\Model;

class TaskUpdateRepresentation extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $descriptionSet;

    /**
     * @var \DateTime
     */
    public $dueDate;

    /**
     * @var bool
     */
    public $dueDateSet;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $nameSet;

    protected static $constructProperties = [
        'description' => 'String',
        'descriptionSet' => 'Boolean',
        'dueDate' => 'Date',
        'dueDateSet' => 'Boolean',
        'name' => 'String',
        'nameSet' => 'Boolean'
    ];
}