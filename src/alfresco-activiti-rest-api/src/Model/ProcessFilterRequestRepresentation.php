<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 18/09/2018
 * Time: 23:26
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Model;


class ProcessFilterRequestRepresentation extends Model
{
    /**
     * @var int
     */
    public $processDefinitionId;

    /**
     * @var int
     */
    public $appDefinitionId;

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
        'processDefinitionId' => 'Integer',
        'appDefinitionId' => 'Integer',
        'state' => 'String',
        'sort' => 'String',
        'page' => 'Integer',
        'size' => 'Integer'
    ];
}