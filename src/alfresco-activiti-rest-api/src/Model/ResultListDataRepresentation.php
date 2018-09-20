<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 19/09/2018
 * Time: 13:13
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Model;


class ResultListDataRepresentation extends Model
{
    /**
     * @var AbstractRepresentation[]
     */
    public $data;

    /**
     * @var int
     */
    public $size;

    /**
     * @var int
     */
    public $start;

    /**
     * @var int
     */
    public $total;

    protected static $constructProperties = [
        'data' => [AbstractRepresentation::class],
        'size' => 'Integer',
        'start' => 'Integer',
        'total' => 'Integer'
    ];
}