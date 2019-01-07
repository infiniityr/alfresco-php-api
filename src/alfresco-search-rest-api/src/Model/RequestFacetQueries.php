<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 03/09/2018
 * Time: 20:34
 */

namespace AlfPHPApi\AlfrescoSearchRestApi\Model;


use AlfPHPApi\AlfrescoCoreRestApi\ApiClient;
use AlfPHPApi\AlfrescoCoreRestApi\Model\Model;

class RequestFacetQueries extends Model
{
    /**
     * @var RequestFacetQueriesInner[]
     */
    public $facets;

    protected static $constructProperties = [
        'facets' => [RequestFacetQueriesInner::class]
    ];

    /**
     * RequestFacetQueries constructor.
     *
     * @param RequestFacetQueriesInner[] $facets
     */
    public function __construct(array $facets = null) { $this->facets = $facets; }

    public static function constructFromArray(array $data, $obj = null)
    {
        $obj = $obj ?: new static();
        $obj->facets = ApiClient::convertToType($data, static::$constructProperties['facets']);
        return $obj;
    }

    public function jsonSerialize()
    {
        return $this->facets;
    }
}