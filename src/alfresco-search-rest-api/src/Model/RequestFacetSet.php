<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 03/09/2018
 * Time: 20:37
 */

namespace AlfPHPApi\AlfrescoSearchRestApi\Model;


use AlfPHPApi\AlfrescoCoreRestApi\Model\Model;

class RequestFacetSet extends Model
{
    /**
     * @var string
     */
    public $label;

    /**
     * @var string
     */
    public $start;

    /**
     * @var string
     */
    public $end;

    /**
     * @var bool
     */
    public $startInclusive = true;

    /**
     * @var bool
     */
    public $endInclusive = true;

    protected static $constructProperties = [
        'label' => 'String',
        'start' => 'String',
        'end' => 'String',
        'startInclusive' => 'Boolean',
        'endInclusive' => 'Boolean'
    ];
}