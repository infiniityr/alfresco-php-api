<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 03/09/2018
 * Time: 19:44
 */

namespace AlfPHPApi\AlfrescoSearchRestApi\Model;


class GenericBucket extends Model
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
     * @var array
     */
    public $display;

    /**
     * @var GenericMetric[]
     */
    public $metrics;

    /**
     * @var array[]
     */
    public $facets;

    /**
     * @var GenericBucketBucketInfo
     */
    public $bucketInfo;

    protected static $constructProperties = [
        'label' => 'String',
        'filterQuery' => 'String',
        'display' => 'Array',
        'metrics' => [GenericMetric::class],
        'facets' => ['Array'],
        'bucketInfo' => GenericBucketBucketInfo::class
    ];
}