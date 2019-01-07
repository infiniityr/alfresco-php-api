<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 06/09/2018
 * Time: 22:37
 */

namespace AlfPHPApi\AlfrescoSearchRestApi\Model;


use AlfPHPApi\AlfrescoCoreRestApi\Model\Model;

class ResultSetContextFacetQueries extends Model
{
    /**
     * @var string
     */
    public $label;

    /**
     * @var string
     */
    public $filterQuery;

    /**
     * @var int
     */
    public $count;

    protected static $constructProperties = [
        'label' => 'String',
        'filterQuery' => 'String',
        'count' => 'Integer'
    ];
}