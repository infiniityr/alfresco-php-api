<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 19/09/2018
 * Time: 15:13
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Model;


class TaskQueryRequestRepresentation extends Model
{
    /**
     * @var int
     */
    public $processInstanceId;

    /**
     * @var string
     */
    public $text;

    /**
     * @var string
     */
    public $assignment;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $sort;

    /**
     * @var int
     */
    public $page;

    /**
     * @var int
     */
    public $size;

    protected static $constructProperties = [
        'processInstanceId' => 'Integer',
        'text' => 'String',
        'assignment' => 'String',
        'state' => 'String',
        'sort' => 'String',
        'page' => 'Integer',
        'size' => 'Integer'
    ];
}