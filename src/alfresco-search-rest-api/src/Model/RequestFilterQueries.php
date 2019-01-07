<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 06/09/2018
 * Time: 23:07
 */

namespace AlfPHPApi\AlfrescoSearchRestApi\Model;


use AlfPHPApi\AlfrescoCoreRestApi\ApiClient;
use AlfPHPApi\AlfrescoCoreRestApi\Model\Model;

class RequestFilterQueries extends Model
{
    /**
     * @var RequestFacetQueriesInner[]
     */
    public $filters;

    protected static $constructProperties = [
        'filters' => [RequestFacetQueriesInner::class]
    ];

    /**
     * RequestFilterQueries constructor.
     *
     * @param RequestFacetQueriesInner[] $filters
     */
    public function __construct(array $filters = null) { $this->filters = $filters; }

    public static function constructFromArray(array $data, $obj = null)
    {
        $obj = $obj ?: new static();
        $obj->filters = ApiClient::convertToType($data, static::$constructProperties['filters']);
        return $obj;
    }

    public function jsonSerialize()
    {
        return $this->filters;
    }
}