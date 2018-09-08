<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 03/09/2018
 * Time: 20:33
 */

namespace AlfPHPApi\AlfrescoSearchRestApi\Model;


class RequestFacetIntervalsIntervals extends Model
{
    /**
     * @var string
     */
    public $field;

    /**
     * @var string
     */
    public $label;

    /**
     * @var RequestFacetSet[]
     */
    public $sets;

    protected static $constructProperties = [
        'field' => 'String',
        'label' => 'String',
        'sets' => [RequestFacetSet::class]
    ];
}