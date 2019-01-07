<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 03/09/2018
 * Time: 20:24
 */

namespace AlfPHPApi\AlfrescoSearchRestApi\Model;


use AlfPHPApi\AlfrescoCoreRestApi\Model\Model;

class RequestFacetField extends Model
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
     * @var string
     */
    public $prefix;

    /**
     * @var string
     */
    public $sort;

    /**
     * @var string
     */
    public $method;

    /**
     * @var bool
     */
    public $missing = false;

    /**
     * @var int
     */
    public $limit;

    /**
     * @var int
     */
    public $offset;

    /**
     * @var int
     */
    public $mincount;

    /**
     * @var int
     */
    public $facetEnumCacheMinDf;

    /**
     * @var string[]
     */
    public $excludeFilters;

    protected static $constructProperties = [
        'field' => 'String',
        'label' => 'String',
        'prefix' => 'String',
        'sort' => 'String',
        'method' => 'String',
        'missing' => 'Boolean',
        'limit' => 'Integer',
        'offset' => 'Integer',
        'mincount' => 'Integer',
        'facetEnumCacheMinDf' => 'Integer',
        'excludeFilters' => ['String']
    ];

    /**
     * RequestFacetField constructor.
     *
     * @param string $field
     */
    public function __construct(string $field = null) { $this->field = $field;}
}

class SortEnum {
    /**
     * @var string
     */
    const COUNT = "COUNT";

    /**
     * @var string
     */
    const INDEX = "INDEX";
}

class MethodEnum {
    /**
     * @var string
     */
    const ENUM = "ENUM";

    /**
     * @var string
     */
    const FC = "FC";
}