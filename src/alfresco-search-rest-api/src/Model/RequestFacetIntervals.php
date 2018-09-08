<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 03/09/2018
 * Time: 20:31
 */

namespace AlfPHPApi\AlfrescoSearchRestApi\Model;


class RequestFacetIntervals extends Model
{
    /**
     * @var RequestFacetSet[]
     */
    public $sets;

    /**
     * @var RequestFacetIntervalsIntervals[]
     */
    public $intervals;

    protected static $constructProperties = [
        'sets' => [RequestFacetSet::class],
        'intervals' => [RequestFacetIntervalsIntervals::class],
    ];
}