<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 03/09/2018
 * Time: 19:52
 */

namespace AlfPHPApi\AlfrescoSearchRestApi\Model;


class GenericMetric extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var array
     */
    public $value;

    protected static $constructProperties = [
        'type' => 'String',
        'value' => 'Array'
    ];
}