<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 03/09/2018
 * Time: 20:30
 */

namespace AlfPHPApi\AlfrescoSearchRestApi\Model;


class RequestFacetFields extends Model
{
    /**
     * @var RequestFacetField[]
     */
    public $facets;

    protected static $constructProperties = [
        'facets' => [RequestFacetField::class]
    ];

    /**
     * RequestFacetFields constructor.
     *
     * @param RequestFacetField[] $facets
     */
    public function __construct(array $facets = null) { $this->facets = $facets;}
}