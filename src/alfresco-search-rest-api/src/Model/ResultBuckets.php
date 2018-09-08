<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 06/09/2018
 * Time: 15:56
 */

namespace AlfPHPApi\AlfrescoSearchRestApi\Model;


class ResultBuckets extends Model
{
    /**
     * @var string
     */
    public $label;

    /**
     * @var ResultBucketsBuckets[]
     */
    public $buckets;

    protected static $constructProperties = [
        'label' => 'String',
        'buckets' => ResultBucketsBuckets::class
    ];
}