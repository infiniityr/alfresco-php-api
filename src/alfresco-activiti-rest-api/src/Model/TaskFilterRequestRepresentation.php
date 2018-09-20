<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 19/09/2018
 * Time: 15:11
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Model;


class TaskFilterRequestRepresentation extends Model
{
    /**
     * @var int
     */
    public $appDefinitionId;

    /**
     * @var TaskFilterRepresentation
     */
    public $filter;

    /**
     * @var int
     */
    public $filterId;

    /**
     * @var int
     */
    public $page;

    /**
     * @var int
     */
    public $size;

    protected static $constructProperties = [
        'appDefinitionId' => 'Integer',
        'filter' => TaskFilterRepresentation::class,
        'filterId' => 'Integer',
        'page' => 'Integer',
        'size' => 'Integer'
    ];
}