<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 03/09/2018
 * Time: 19:51
 */

namespace AlfPHPApi\AlfrescoSearchRestApi\Model;


class GenericFacetResponse extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $label;

    /**
     * @var GenericBucket[]
     */
    public $buckets;

    protected static $constructProperties = [
        'type' => 'String',
        'label' => 'String',
        'buckets' => [GenericBucket::class],
    ];
}