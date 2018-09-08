<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 06/09/2018
 * Time: 15:58
 */

namespace AlfPHPApi\AlfrescoSearchRestApi\Model;


class ResultBucketsBuckets extends Model
{
    /**
     * @var string
     */
    public $label;

    /**
     * @var string
     */
    public $filterQuery;

    /**
     * @var int
     */
    public $count;

    /**
     * @var array
     */
    public $display;

    protected static $constructProperties = [
        'label' => 'String',
        'filterQuery' => 'String',
        'count' => 'Integer',
        'display' => 'Array'
    ];
}