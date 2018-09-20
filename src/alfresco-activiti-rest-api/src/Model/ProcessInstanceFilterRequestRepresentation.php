<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 18/09/2018
 * Time: 23:34
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Model;


class ProcessInstanceFilterRequestRepresentation extends Model
{
    /**
     * @var int
     */
    public $appDefinitionId;

    /**
     * @var ProcessInstanceFilterRepresentation
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
        'filter' => ProcessInstanceFilterRepresentation::class,
        'filterId' => 'Integer',
        'page' => 'Integer',
        'size' => 'Integer'
    ];
}