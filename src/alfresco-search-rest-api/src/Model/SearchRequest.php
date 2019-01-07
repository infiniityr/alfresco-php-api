<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 06/09/2018
 * Time: 22:50
 */

namespace AlfPHPApi\AlfrescoSearchRestApi\Model;


use AlfPHPApi\AlfrescoCoreRestApi\Model\Model;

class SearchRequest extends Model
{
    /**
     * @var RequestQuery
     */
    public $query;

    /**
     * @var RequestPagination
     */
    public $paging;

    /**
     * @var RequestInclude
     */
    public $include;

    /**
     * @var bool
     */
    public $includeRequest = false;

    /**
     * @var RequestFields
     */
    public $fields;

    /**
     * @var RequestSortDefinition
     */
    public $sort;

    /**
     * @var RequestTemplates
     */
    public $templates;

    /**
     * @var RequestDefaults
     */
    public $defaults;

    /**
     * @var RequestLocalization
     */
    public $localization;

    /**
     * @var RequestFilterQueries
     */
    public $filterQueries;

    /**
     * @var RequestFacetQueries
     */
    public $facetQueries;

    /**
     * @var RequestFacetFields
     */
    public $facetFields;

    /**
     * @var RequestFacetIntervals
     */
    public $facetIntervals;

    /**
     * @var RequestPivot[]
     */
    public $pivots;

    /**
     * @var RequestStats[]
     */
    public $stats;

    /**
     * @var RequestSpellcheck
     */
    public $spellcheck;

    /**
     * @var RequestScope
     */
    public $scope;

    /**
     * @var RequestLimits
     */
    public $limits;

    /**
     * @var RequestHighlight
     */
    public $highlight;

    /**
     * @var RequestRange[]
     */
    public $ranges;

    protected static $constructProperties = [
        'query' => RequestQuery::class,
        'paging' => RequestPagination::class,
        'include' => RequestInclude::class,
        'includeRequest' => 'Boolean',
        'fields' => RequestFields::class,
        'sort' => RequestSortDefinition::class,
        'templates' => RequestTemplates::class,
        'defaults' => RequestDefaults::class,
        'localization' => RequestLocalization::class,
        'filterQueries' => RequestFilterQueries::class,
        'facetQueries' => RequestFacetQueries::class,
        'facetFields' => RequestFacetFields::class,
        'facetIntervals' => RequestFacetIntervals::class,
        'pivots' => [RequestPivot::class],
        'stats' => [RequestStats::class],
        'spellcheck' => RequestSpellcheck::class,
        'scope' => RequestScope::class,
        'limits' => RequestLimits::class,
        'highlight' => RequestHighlight::class,
        'ranges' => [RequestRange::class]
    ];
}