<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 06/09/2018
 * Time: 15:41
 */

namespace AlfPHPApi\AlfrescoSearchRestApi\Model;


class RequestStats extends Model
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
     * @var bool
     */
    public $min = true;

    /**
     * @var bool
     */
    public $max = true;

    /**
     * @var bool
     */
    public $sum = true;

    /**
     * @var bool
     */
    public $countValues = true;

    /**
     * @var bool
     */
    public $missing = true;

    /**
     * @var bool
     */
    public $mean = true;

    /**
     * @var bool
     */
    public $stddev = true;

    /**
     * @var bool
     */
    public $sumOfSquares = true;

    /**
     * @var bool
     */
    public $distinctValues = false;

    /**
     * @var bool
     */
    public $countDistinct = false;

    /**
     * @var bool
     */
    public $cardinality = false;

    /**
     * @var float
     */
    public $cardinalityAccuracy = 0.3;

    /**
     * @var string[]
     */
    public $excludeFilters;

    /**
     * @var float[]
     */
    public $percentiles;

    protected static $constructProperties = [
        'field' => 'String',
        'label' => 'String',
        'min' => 'Boolean',
        'max' => 'Boolean',
        'sum' => 'Boolean',
        'countValues' => 'Boolean',
        'missing' => 'Boolean',
        'mean' => 'Boolean',
        'stddev' => 'Boolean',
        'sumOfSquares' => 'Boolean',
        'distinctValues' => 'Boolean',
        'countDistinct' => 'Boolean',
        'cardinality' => 'Boolean',
        'cardinalityAccuracy' => 'Number',
        'excludeFilters' => ['String'],
        'percentiles' => ['Number']
    ];
}