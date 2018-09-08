<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 03/09/2018
 * Time: 19:49
 */

namespace AlfPHPApi\AlfrescoSearchRestApi\Model;


class GenericBucketBucketInfo extends Model
{
    /**
     * @var string
     */
    public $start;

    /**
     * @var bool
     */
    public $startInclusive;

    /**
     * @var string
     */
    public $end;

    /**
     * @var bool
     */
    public $endInclusive;

    protected static $constructProperties = [
        'start' => 'String',
        'startInclusive' => 'Boolean',
        'end' => 'String',
        'endInclusive' => 'Boolean'
    ];
}