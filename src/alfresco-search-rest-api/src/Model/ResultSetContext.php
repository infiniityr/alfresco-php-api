<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 06/09/2018
 * Time: 16:45
 */

namespace AlfPHPApi\AlfrescoSearchRestApi\Model;


use AlfPHPApi\AlfrescoCoreRestApi\Model\Model;

class ResultSetContext extends Model
{
    /**
     * @var ResponseConsistency
     */
    public $consistency;

    /**
     * @var SearchRequest
     */
    public $request;

    /**
     * @var ResultSetContextFacetQueries[]
     */
    public $facetQueries;

    /**
     * @var ResultBuckets[]
     */
    public $facetsFields;

    /**
     * @var GenericFacetResponse[]
     */
    public $facets;

    /**
     * @var ResultSetContextSpellckeck[]
     */
    public $spellcheck;

    protected static $constructProperties = [
        'consistency' => ResponseConsistency::class,
        'request' => SearchRequest::class,
        'facetQueries' => [ResultSetContextFacetQueries::class],
        'facetFields' => [ResultBuckets::class],
        'facets' => [GenericFacetResponse::class],
        'spellcheck' => [ResultSetContextSpellcheck::class]
    ];
}