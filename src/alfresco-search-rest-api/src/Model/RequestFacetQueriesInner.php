<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 03/09/2018
 * Time: 20:36
 */

namespace AlfPHPApi\AlfrescoSearchRestApi\Model;


class RequestFacetQueriesInner extends Model
{
    /**
     * @var string
     */
    public $query;

    /**
     * @var string
     */
    public $label;

    protected static $constructProperties = [
        'query' => 'String',
        'label' => 'String'
    ];

    /**
     * RequestFacetQueriesInner constructor.
     *
     * @param string $query
     * @param string $label
     */
    public function __construct(string $query = null, string $label = null)
    {
        $this->query = $query;
        $this->label = $label;}
}